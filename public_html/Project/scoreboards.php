<?php

function getTopDailyScores($time_limit = 10) {
    
    $user_id = get_user_id();

    $db = getDB();

    $score_query = "SELECT username, score FROM Scores JOIn Users ON Scores.user_id = Users.id
                    WHERE Scores.created >= CURRENT_DATE AND Scores.user_id = :user_id
                    ORDER BY score DESC LIMIT :time_limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':time_limit', $time_limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getTopWeeklyScores($time_limit = 10) {
    
    $user_id = get_user_id();

    $db = getDB();

    $score_query = "SELECT username, score FROM Scores JOIN Users ON Scores.user_id = Users.id
                    WHERE Scores.created >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND Scores.user_id = :user_id
                    ORDER BY score DESC LIMIT :time_limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':time_limit', $time_limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getTopMonthlyScores($time_limit = 10) {

    $user_id = get_user_id();

    $db = getDB();

    $score_query = "SELECT username, score FROM Scores JOIN Users ON Scores.user_id = Users.id
                    WHERE Scores.created >= DATE_SUB(NOW(), INTERVAL 1 MONTH) AND Scores.user_id = :user_id
                    ORDER BY score DESC LIMIT :time_limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':time_limit', $time_limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getTopScoresLifetime($time_limit = 10) {

    $user_id = get_user_id();

    $db = getDB();

    $score_query = "SELECT username, score FROM Scores JOIN Users ON Scores.user_id = Users.id
                    WHERE Scores.user_id = :user_id
                    ORDER BY score DESC LIMIT :time_limit";
    
    $stmt = $db->prepare($score_query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':time_limit', $time_limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}