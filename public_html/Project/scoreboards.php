<?php

//am3525 | 08/01

function getTopDailyScores($limit) {
    
    $user_id = get_user_id();
    $db = getDB();

    $score_query = "SELECT U.username, S.score, S.created FROM Scores S JOIN Users U ON S.user_id = U.id
                    WHERE DATE(S.created) = CURDATE()
                    ORDER BY S.score DESC LIMIT :limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTopWeeklyScores($limit) {
    
    $user_id = get_user_id();
    $db = getDB();

    $score_query = "SELECT U.username, S.score, S.created FROM Scores S JOIN Users U ON S.user_id = U.id
                    WHERE YEARWEEK(S.created) = YEARWEEK(NOW())
                    ORDER BY S.score DESC LIMIT :limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTopMonthlyScores($limit) {
    
    $user_id = get_user_id();
    $db = getDB();

    $score_query = "SELECT U.username, S.score, S.created FROM Scores S JOIN Users U ON S.user_id = U.id
                    WHERE MONTH(S.created) = MONTH(NOW()) AND YEAR(S.created) = YEAR(NOW())
                    ORDER BY S.score DESC LIMIT :limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTopScoresLifetime($limit) {

    $user_id = get_user_id();
    $db = getDB();

    $score_query = "SELECT U.username, S.score, S.created FROM Scores S JOIN Users U ON S.user_id = U.id
                    ORDER BY S.score DESC LIMIT :limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

