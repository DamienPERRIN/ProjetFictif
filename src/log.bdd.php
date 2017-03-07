<?php
/**
 * @return mysqli
 */
function getConnection()
{
    require ('src/auth.bdd.php');

    $mysqli = new mysqli(HOST, USER, PASSWORD, DB);

    if ($mysqli->connect_errno) {
        echo "Failled to connect to MYSQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
        die();
    }
    return $mysqli;
}

/**
 * @param $mysqli
 * @param $sql
 * @return mixed
 */
function execSql($mysqli, $sql)
{
    if (!$result = $mysqli->query($sql)){
        echo "Failled to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}
