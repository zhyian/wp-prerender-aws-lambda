<?php

namespace Innocode\SSR;

/**
 * Class Post
 *
 * @package InnocodeWP\SSR
 */
final class Post
{
    /**
     * Name of plugin post meta
     */
    const POST_META = 'prerender';

    /**
     * Save rendered content to plugin post meta
     *
     * @param $post_id
     * @param $content
     *
     * @return bool
     */
    public static function save_prerender_meta( $post_id, $content ): bool
    {
        return (bool) update_post_meta( $post_id, static::POST_META, $content );
    }

    /**
     * Remove plugin post meta with rendered content
     *
     * @param $post_id
     */
    public static function detele_prerender_meta( $post_id ): void
    {
        delete_post_meta( $post_id, static::POST_META );
    }
}
