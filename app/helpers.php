<?php



function csvToArray($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return false;

    $header = NULL;
    $data = array();
    if ( $fp = fopen($filename, 'r') )
    {
        while ( $row = fgetcsv($fp, 1000, $delimiter) )
        {
            if(count($row) < 1)
                continue;
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($fp);
    }
    return $data;
}
