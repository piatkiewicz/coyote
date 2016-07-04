<?php

namespace Coyote\Repositories\Contracts;

use Illuminate\Http\Request;

/**
 * @package Coyote\Repositories\Contracts
 * @method $this withTrashed()
 */
interface WikiRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $path
     * @return mixed
     */
    public function findByPath($path);

    /**
     * @param string $path
     * @return mixed
     */
    public function findNewLocation($path);

    /**
     * Get children articles of given parent_id.
     *
     * @param int|null $parentId
     * @return mixed
     */
    public function children($parentId = null);

    /**
     * @param int|null $parentId
     * @return mixed
     */
    public function getCatalog($parentId = null);

    /**
     * @param int $pathId
     * @return mixed
     */
    public function parents($pathId);

    /**
     * @return mixed
     */
    public function treeList();

    /**
     * @param int $userId
     * @return mixed
     */
    public function getSubscribed($userId);

    /**
     * @param \Coyote\Wiki $wiki
     * @param Request $request
     */
    public function save($wiki, Request $request);

    /**
     * @param int $wikiId
     * @param int $pathId
     * @return \Coyote\Wiki\Path
     */
    public function clone($wikiId, $pathId);

    /**
     * @param int $id   Current path id
     * @param int $wikiId   Current page id
     * @param int $pathId   New path id
     * @return \Coyote\Wiki\Path
     */
    public function move($id, $wikiId, $pathId);

    /**
     * @param int $wikiId
     * @return mixed
     */
    public function delete($wikiId);

    /**
     * @param int $pathId
     * @return mixed
     */
    public function unlink($pathId);

    /**
     * @param int $wikiId
     * @return mixed
     */
    public function restore($wikiId);

    /**
     * @param int $wikiId
     * @return \Coyote\Wiki[]
     */
    public function getAllCategories($wikiId);

    /**
     * New page was created so we need to fix broken links.
     *
     * @param string $path
     * @param int $pathId
     */
    public function associateLink($path, $pathId);

    /**
     * $path was deleted so we need to dissociate links.
     *
     * @param string $path
     */
    public function dissociateLink($path);
}
