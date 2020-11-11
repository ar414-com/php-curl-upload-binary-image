<?php

namespace Ar414;


class UploadBinaryImage
{
    public static function upload($url,$fields,$fieldName,$fileName,$fileBody,$mimeType = 'application/octet-stream',array $headers = array())
    {
        $data = array();
        $mimeBoundary = md5(microtime());

        foreach ($fields as $key => $val) {
            $data = self::setPostBodyData($data,$key,$val,$mimeBoundary);
        }

        // set image body
        array_push($data, '--' . $mimeBoundary);
        $finalMimeType = empty($mimeType) ? 'application/octet-stream' : $mimeType;
        $finalFileName = self::escapeQuotes($fileName);
        array_push($data, "Content-Disposition: form-data; name=\"$fieldName\"; filename=\"$finalFileName\"");
        array_push($data, "Content-Type: $finalMimeType");
        array_push($data, '');
        array_push($data, $fileBody);
        array_push($data, '--' . $mimeBoundary . '--');
        array_push($data, '');
        $body = implode("\r\n", $data);
        $contentType = 'multipart/form-data; boundary=' . $mimeBoundary;
        $headers['Content-Type'] = $contentType;
        return self::curlPost($url,$body,$headers);
    }

    public static function setPostBodyData(array $data,$key,$value,$mimeBoundary)
    {
        array_push($data, '--' . $mimeBoundary);
        array_push($data, "Content-Disposition: form-data; name=\"$key\"");
        array_push($data, '');
        array_push($data, $value);
        return $data;
    }

    public static function escapeQuotes($str)
    {
        $find = array("\\", "\"");
        $replace = array("\\\\", "\\\"");
        return str_replace($find, $replace, $str);
    }

    public static function curlPost($url, $body,$headers)
    {

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_NOBODY => false,
            CURLOPT_TIMECONDITION => 120,
            CURLOPT_TIMEOUT => 240,
        );

        if (!empty($headers)) {
            $_headers = array();
            foreach ($headers as $key => $val) {
                array_push($_headers, "$key: $val");
            }
            $options[CURLOPT_HTTPHEADER] = $_headers;
        }

        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;

    }

}