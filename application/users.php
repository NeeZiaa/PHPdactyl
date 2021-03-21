<?php
namespace NeeZiaa\PHPdactyl;
class Users{
    function listUsers($apikey,$urlptero){
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $urlptero.'/api/application/users');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_GET, 1);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer '.$apikey.'';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_COOKIE, 'pterodactyl_session=eyJpdiI6IjVUVk1jZlptcDVhenVmcnlKOVQwRUE9PSIsInZhbHVlIjoiU0xrcEJwVlFhZk9IWFlCN3FiZVdKY1lDSHE2R3d4dGpUWmY4Rm9CcXo2Rm1Sd1MxbDRzODRURnk2OXl4ZlVXQyIsIm1hYyI6ImZiZTA1N2UxYjA4ODA2ODQ2NzBjOTkzNzQyYTg2MDY2NGUyNWFjYzYxOTNjMmQyZTViOGJlODE4MTZjYzg1ODAifQ%3D%3D');

        $result = curl_exec($curl);
        if(curl_errno($curl)){

        } else {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
    }
    function userDetails($apikey,$urlptero,$iduser){
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $urlptero.'/api/application/users/'.$iduser.'');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_GET, 1);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer '.$apikey.'';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_COOKIE, 'pterodactyl_session=eyJpdiI6IjVUVk1jZlptcDVhenVmcnlKOVQwRUE9PSIsInZhbHVlIjoiU0xrcEJwVlFhZk9IWFlCN3FiZVdKY1lDSHE2R3d4dGpUWmY4Rm9CcXo2Rm1Sd1MxbDRzODRURnk2OXl4ZlVXQyIsIm1hYyI6ImZiZTA1N2UxYjA4ODA2ODQ2NzBjOTkzNzQyYTg2MDY2NGUyNWFjYzYxOTNjMmQyZTViOGJlODE4MTZjYzg1ODAifQ%3D%3D');

        $result = curl_exec($curl);
        if(curl_errno($curl)){

        } else {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
    }
    function createUser($apikey,$urlptero,$details){
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $urlptero.'/api/application/users');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $details);
        curl_setopt($curl, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer '.$apikey.'';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_COOKIE, 'pterodactyl_session=eyJpdiI6IjVUVk1jZlptcDVhenVmcnlKOVQwRUE9PSIsInZhbHVlIjoiU0xrcEJwVlFhZk9IWFlCN3FiZVdKY1lDSHE2R3d4dGpUWmY4Rm9CcXo2Rm1Sd1MxbDRzODRURnk2OXl4ZlVXQyIsIm1hYyI6ImZiZTA1N2UxYjA4ODA2ODQ2NzBjOTkzNzQyYTg2MDY2NGUyNWFjYzYxOTNjMmQyZTViOGJlODE4MTZjYzg1ODAifQ%3D%3D');

        $result = curl_exec($curl);
        if(curl_errno($curl)){

        } else {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
    }
    function updateUser(){
        $curl = curl_init($apikey,$urlptero,$iduser);

        curl_setopt($curl, CURLOPT_URL, $urlptero.'/api/application/users/'.$iduser.'');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $details);
        curl_setopt($curl, CURLOPT_PATCH, 1);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer '.$apikey.'';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_COOKIE, 'pterodactyl_session=eyJpdiI6IjVUVk1jZlptcDVhenVmcnlKOVQwRUE9PSIsInZhbHVlIjoiU0xrcEJwVlFhZk9IWFlCN3FiZVdKY1lDSHE2R3d4dGpUWmY4Rm9CcXo2Rm1Sd1MxbDRzODRURnk2OXl4ZlVXQyIsIm1hYyI6ImZiZTA1N2UxYjA4ODA2ODQ2NzBjOTkzNzQyYTg2MDY2NGUyNWFjYzYxOTNjMmQyZTViOGJlODE4MTZjYzg1ODAifQ%3D%3D');

        $result = curl_exec($curl);
        if(curl_errno($curl)){

        } else {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
    }
    function deleteUser($apikey,$urlptero,$iduser){
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $urlptero.'/api/application/users/'.$iduser.'');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $details);
        curl_setopt($curl, CURLOPT_DELETE, 1);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer '.$apikey.'';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_COOKIE, 'pterodactyl_session=eyJpdiI6IjVUVk1jZlptcDVhenVmcnlKOVQwRUE9PSIsInZhbHVlIjoiU0xrcEJwVlFhZk9IWFlCN3FiZVdKY1lDSHE2R3d4dGpUWmY4Rm9CcXo2Rm1Sd1MxbDRzODRURnk2OXl4ZlVXQyIsIm1hYyI6ImZiZTA1N2UxYjA4ODA2ODQ2NzBjOTkzNzQyYTg2MDY2NGUyNWFjYzYxOTNjMmQyZTViOGJlODE4MTZjYzg1ODAifQ%3D%3D');

        $result = curl_exec($curl);
        if(curl_errno($curl)){

        } else {
            var_dump(curl_error($curl));
        }
        curl_close($curl);
    }
}