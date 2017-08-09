<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * @var array
     */
    public static $rules = [
        'title'       => 'required',
        'status'      => 'required'
    ];

    /**
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    public static function latestArticles(int $limit)
    {
        return self::limit($limit)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    /**
     * @param int $limit
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function latestPaginatedArticles(int $limit)
    {
        return self::orderBy('created_at', 'DESC')
            ->paginate($limit);
    }
}
