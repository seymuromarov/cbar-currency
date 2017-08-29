<?php

namespace Seymur\Currency;

class Currency
{
    public function get()
    {
        $xml_file = date("d.m.Y") . ".xml";
        $destinationPath = "https://www.cbar.az/currencies/" . $xml_file;
        $xml = simplexml_load_file($destinationPath);
        $xml_data = $xml->ValType[1]->Valute;
        $currencies = [];
        for ($i = 0; $i < count($xml_data); $i++) {
            $currencies[$i]['nominal'] = (int)$xml_data[$i]->Nominal;
            $currencies[$i]['name'] = (string)$xml_data[$i]->Name;
            $currencies[$i]['value'] = (float)$xml_data[$i]->Value;
            $currencies[$i]['code'] = (string)$xml_data[$i]['Code'];
        }

        return array_reverse($currencies, false);;

    }

    public function search($code)
    {
        $xml_file = date("d.m.Y") . ".xml";
        $destinationPath = "https://www.cbar.az/currencies/" . $xml_file;
        $xml = simplexml_load_file($destinationPath);
        $xml_data = $xml->ValType[1]->Valute;
        $currencies = [];
        for ($i = 0; $i < count($xml_data); $i++) {
            if ((string)$code == (string)$xml_data[$i]['Code']) {
                $currencies[$i]['nominal'] = (int)$xml_data[$i]->Nominal;
                $currencies[$i]['name'] = (string)$xml_data[$i]->Name;
                $currencies[$i]['value'] = (float)$xml_data[$i]->Value;
                $currencies[$i]['code'] = (string)$xml_data[$i]['Code'];
                break;
            }
        }

        return array_reverse($currencies, false);;

    }
}