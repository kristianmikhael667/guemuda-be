<?php

namespace App\Exports;

use App\Models\Content;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LikeExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $topLike = Content::join("like_contents", "like_contents.id_post", "=", "contents.id")
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.link")
            ->groupBy("contents.status")
            ->groupBy("contents.created_at")
            ->groupBy("contents.updated_at")
            ->groupBy("contents.link_audio")
            ->groupBy("contents.title")
            ->groupBy("contents.subdesc")
            ->groupBy("contents.image")
            ->groupBy("contents.captions")
            ->groupBy("contents.type")
            ->groupBy("contents.video")
            ->groupBy("contents.category_id")
            ->groupBy("contents.tags_id")
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_like'), 'contents.*'));

        $likes = $topLike->map(function ($item) {
            return [
                'Title' => $item->title,
                'Category' => $item->category->name,
                'Total Like' => $item->total_like
            ];
        });

        return collect($likes->all());
    }

    public function headings(): array
    {
        return ["Title Article", "Category", "Total Like"];
    }
}
