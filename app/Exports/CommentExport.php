<?php

namespace App\Exports;

use App\Models\Content;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CommentExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $topall = Content::join("comments", "comments.post_id", "=", "contents.id")
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
            ->get(array(DB::raw('COUNT(contents.id) as total_comment'), 'contents.*'));

        $comments = $topall->map(function ($item) {
            return [
                'Title' => $item->title,
                'Category' => $item->category->name,
                'Total Comment' => $item->total_comment
            ];
        });

        return collect($comments->all());
    }

    public function headings(): array
    {
        return ["Title Article", "Category", "Total Comment"];
    }
}
