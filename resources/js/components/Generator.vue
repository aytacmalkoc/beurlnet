<template>
    <div>
        <fieldset :disabled="submit">
            <form @submit.prevent="generate" class="rounded p-4 mt-4 bg-white">
                <div class="row text-left justify-content-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                required=""
                                placeholder="url"
                                v-model="url"
                                :class="error ? 'is-invalid' : ''"
                            />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="form-group mb-3">
                            <select
                                class="form-control custom-select"
                                v-model="is_public"
                            >
                                <option value="0" selected=""
                                    >Bağlantıyı Gizle</option
                                >
                                <option value="1">Bağlantıyı Paylaş</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-12">
                        <button
                            type="submit"
                            class="searchbtn btn btn-outline-success btn-block p"
                            :disabled="url.length == 0 || error"
                        >
                            Kısalt!
                        </button>
                    </div>
                </div>
            </form>
        </fieldset>
        <p class="text-muted mb-0 mt-4 small" v-if="result.status">
            <a
                :href="`https://${result.data}`"
                target="_blank"
                class="text-success"
                >{{ result.data }}</a
            >
            <button
                class="btn btn-outline-light mx-3 btn-sm"
                v-clipboard="result.data"
                v-clipboard:success="copy"
            >
                {{ copyButton }}
            </button>
        </p>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Generator",
    data() {
        return {
            url: "",
            is_public: "0",
            error: false,
            submit: false,
            copyButton: "Kopyala",
            result: {
                status: false,
                data: ""
            }
        };
    },
    methods: {
        generate() {
            if (this.valitade()) {
                this.submit = true;
                this.result.status = false;
                axios
                    .post(`${process.env.MIX_API_URL}/generate`, {
                        url: this.url,
                        public: this.is_public
                    })
                    .then(res => {
                        this.result.status = true;
                        this.result.data = res.data;
                        this.clear();
                        this.submit = false;
                        this.copyButton = "Kopyala";
                    })
                    .catch(err => console.log(err));
            }
        },
        valitade() {
            if (this.url == "") {
                this.error = true;
                return false;
            }

            return true;
        },
        clear() {
            this.url = "";
            this.is_public = "0";
        },
        copy() {
            this.copyButton = "Kopyalandı!";
        }
    }
};
</script>
