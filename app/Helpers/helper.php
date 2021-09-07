<?php

use App\Models\Count;

function url_counter($action)
{
    $count = Count::find(1);

    switch ($action) {
        case 'created':
            $count->update([
                'created' => $count->created + 1
            ]);
            break;

        case 'visited':
            $count->update([
                'visited' => $count->visited + 1
            ]);
            break;

        case 'deleted':
            $count->update([
                'deleted' => $count->deleted + 1
            ]);
            break;
            
        default:
            return 0;
            break;
    }
}