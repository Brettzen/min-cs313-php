<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkUsername($username) {
    $db = dbConnect();
    $sql = 'SELECT username FROM students WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $userExists = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    
    if(empty($userExists)) {
        return 0;
    } else {
        return 1;
    }
}

function checkUsernameById($studentId) {
    $db = dbConnect();
    $sql = 'SELECT username FROM students WHERE studentId = :studentId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':studentId', $studentId, PDO::PARAM_STR);
    $stmt->execute();
    
    $username = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $username;
}

function getUserData($username) {
    $db = dbConnect();
    $sql = 'SELECT studentId, rankId, rankName, username, firstName, lastName, email, gender, password FROM students WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $userData;
}

function checkPass($username, $password) {
    $db = dbConnect();
    $sql = 'SELECT studentId, rankId, rankName, username, firstName, lastName, email, gender, password FROM students WHERE username = :username AND password = :password';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $userData;
}

function updatePass($username, $password) {
    $db = dbConnect();
    $sql = 'UPDATE students SET password = :password WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getCategories() {
    $db = dbConnect();
    $sql = 'SELECT * FROM curriculum_categories';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $categories;
}

function getCurriculum($username, $rankId) {
    $db = dbConnect();
        $sql = 'SELECT s.firstName, s.rankName, s.gender, t.rankId, t.categoryId, t.techniqueId, t.techniqueKName, t.techniqueEName, t.techniqueDesc, c.categoryKName, c.categoryEName, c.categoryDesc FROM students s RIGHT JOIN techniques t ON s.rankId >= t.rankId INNER JOIN curriculum_categories c ON t.categoryId = c.categoryId WHERE username = :username AND t.rankId = :rankId AND t.categoryId != 7';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':rankId', $rankId, PDO::PARAM_STR);
    $stmt->execute();
    
    $curriculum = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $curriculum;
}

function getRanks($username) {
    $db = dbConnect();
    $sql = 'SELECT r.rankId, r.rank, r.rankName, r.rankColor FROM ranks r LEFT JOIN students s ON s.rankId >= r.rankId WHERE username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $ranks = $stmt->fetchAll(PDO::PARAM_STR);
    $stmt->closeCursor();
    return $ranks;
}

function getBoardBreaks($username, $rankId) {
    $db = dbConnect();
    $sql = 'SELECT t.rankId, t.categoryId, t.techniqueId, t.techniqueKName, t.techniqueEName, t.techniqueDesc FROM students s RIGHT JOIN techniques t ON s.rankId >= t.rankId WHERE username = :username AND t.rankId = :rankId AND t.categoryId = 7';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':rankId', $rankId, PDO::PARAM_STR);
    $stmt->execute();
    
    $boardBreaks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $boardBreaks;
}

function getFitness($username) {
    $db = dbConnect();
    $sql = 'SELECT s.firstname, s.rankname, s.gender, f.fitnessid, f.testdate, f.pushups, f.pushupsstyle, f.legRaises, f.legRaisesStyle, f.pullups, f.pullupsStyle, f.jumps, f.jumpsStyle, f.roundRight, f.roundLeft, f.roundTime, f.stretch, f.stretchStyle FROM students s LEFT JOIN fitness f ON s.studentId = f.studentId WHERE username = :username ORDER BY f.testDate DESC';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $fitness = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $fitness;
}

function addFitness($userid, $data) {
    error_log('made it to model');
    error_log('user id is: ' . $userid);
    error_log('here is the data: ' . json_encode($data));
    $db = dbConnect();
    $sql = 'INSERT INTO fitness (studentid, pushups, legraises, pullups, jumps, roundright, roundleft, roundtime, stretch) VALUES (:studentid, :pushups, :legraises, :pullups, :jumps, :roundright, :roundleft, :roundtime, :stretch)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':studentid', $userid, PDO::PARAM_STR);
    $stmt->bindValue(':pushups', $data['$pushups'], PDO::PARAM_STR);
    $stmt->bindValue(':legraises', $data['$legraises'], PDO::PARAM_STR);
    $stmt->bindValue(':pullups', $data['$pullups'], PDO::PARAM_STR);
    $stmt->bindValue(':jumps', $data['$jumps'], PDO::PARAM_STR);
    $stmt->bindValue(':roundright', $data['$roundright'], PDO::PARAM_INT);
    $stmt->bindValue(':roundleft', $data['$roundleft'], PDO::PARAM_INT);
    $stmt->bindValue(':roundtime', $data['$roundtime'] . " seconds", PDO::PARAM_STR);
    $stmt->bindValue(':stretch', $data['$stretch'], PDO::PARAM_INT);
    $stmt->execute();
    
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getVideo($technique) {
    $db = dbConnect();
    $sql = 'SELECT * FROM technique_video WHERE techniqueId = :techniqueId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':techniqueId', $technique['techniqueId'], PDO::PARAM_INT);
    $stmt->execute();
    
    $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $videos;
}

function getImages($technique) {
    $db = dbConnect();
    $sql = 'SELECT * FROM technique_images WHERE techniqueId = :techniqueId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':techniqueId', $technique['techniqueId'], PDO::PARAM_INT);
    $stmt->execute();
    
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $images;
}

function getColorScheme($rankId) {
    $db = dbConnect();
    $sql = 'SELECT rankColor, rankFontColor, fitnessColor, navHoverColor FROM ranks WHERE rankId = :rankId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':rankId', $rankId, PDO::PARAM_INT);
    $stmt->execute();
    
    $colorScheme = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $colorScheme;
}

function addStudent($firstname, $lastname, $username, $password, $gender, $rankid, $rankname) {
    error_log('name: ' . $firstname . ' ' . $lastname);
    error_log('username: ' . $username);
    error_log('password: ' . $password);
    error_log('gender: ' . $gender);
    error_log('rankid: ' . $rankid);
    error_log('rankname: ' . $rankname);
    $db = dbConnect();
    $sql = 'INSERT INTO students (firstname, lastname, username, password, gender, rankid, rankname) VALUES (:firstname, :lastname, :username, :password, :gender, :rankid, :rankname)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindValue(':rankid', $rankid, PDO::PARAM_INT);
    $stmt->bindValue(':rankname', $rankname, PDO::PARAM_STR);
    $stmt->execute();
    
    $rowsChanged = $stmt->rowCount();
    error_log('addStudent success: ' . $rowsChanged);
    $stmt->closeCursor();
    return $rowsChanged;
}