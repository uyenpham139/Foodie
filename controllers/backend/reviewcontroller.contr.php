<?php
class ReviewController extends Reviews{
    public function numReviews($menuId) {
        $num =  $this->getNoReviews($menuId);
        return $num;
    }

    public function ratingCount($menuId) {
        $ratingCount =  $this->getRatingCount($menuId);
        return $ratingCount;
    }
        
    public function userInfoByReviews($menuId) {
        // Fetch reviews for the given menu ID
        $reviews = $this->getReviews($menuId);
    
        // Extract user IDs from the reviews
        $userIds = array_column($reviews, 'user_id');
    
        // Fetch user info for these user IDs
        $userInfos = $this->getUsersInfo($userIds);
    
        // Return the combined reviews with user info
        foreach ($reviews as &$review) {
            $userId = $review['user_id'];
            if (isset($userInfos[$userId])) {
                $review['user_info'] = $userInfos[$userId];
            }
        }
    
        return $reviews;
    }
}