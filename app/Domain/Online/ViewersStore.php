<?php
namespace Coyote\Domain\Online;

use Coyote\User;

class ViewersStore
{
    public function viewers(SessionsSnapshot $sessions): Viewers
    {
        return new Viewers(
            $this->mapToViewerUsers($sessions),
            $sessions->guestsCount,
        );
    }

    private function mapToViewerUsers(SessionsSnapshot $sessions): array
    {
        return User::query()
            ->orderByDesc('visited_at')
            ->findMany($sessions->users)
            ->map($this->viewerUser(...))
            ->toArray();
    }

    private function viewerUser(User $user): ViewerUser
    {
        return new ViewerUser(
            $user->name,
            $user->group_name,
            $user->photo->getFilename(),
            \route('profile', [$user->id]),
        );
    }
}