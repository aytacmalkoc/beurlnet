<template>
    <div class="col-12">
        <div class="row">
            <div
                class="col-lg-6 col-sm-12 mt-4 pt-2"
                v-for="link in links"
                :key="link.index"
                v-clipboard="`beurl.net/${link.short_url}`"
                v-clipboard:success="copy"
            >
                <div
                    class="media key-feature align-items-center p-3 rounded shadow public-link"
                >
                    <img
                        :src="
                            `https://s2.googleusercontent.com/s2/favicons?domain_url=${link.url}`
                        "
                        class="avatar avatar-ex-sm"
                        alt=""
                    />
                    <div class="media-body ml-3">
                        <h4 class="title mb-0 text-muted">
                            {{ link.url.replace(/(^\w+:|^)\/\//, "") }}
                        </h4>
                        <p class="text-muted mb-0">
                            {{ `beurl.net/${link.short_url}` }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PublicLinks",
    props: ["links"],
    methods: {
        copy(event) {
            event.trigger.firstChild.classList.add("border");
            event.trigger.firstChild.classList.add("border-success");
            setTimeout(() => {
                event.trigger.firstChild.classList.remove("border");
                event.trigger.firstChild.classList.remove("border-success");
            }, 1500);
        }
    }
};
</script>
