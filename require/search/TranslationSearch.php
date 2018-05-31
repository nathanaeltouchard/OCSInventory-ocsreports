<?php
/*
 * Copyright 2005-2016 OCSInventory-NG/OCSInventory-ocsreports contributors.
 * See the Contributors file for more details about them.
 *
 * This file is part of OCSInventory-NG/OCSInventory-ocsreports.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 2 of the License,
 * or (at your option) any later version.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is distributed in the hope that it
 * will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OCSInventory-NG/OCSInventory-ocsreports. if not, write to the
 * Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

 /**
  * This class implement the base behavior for search pretty print (print translated content for end user)
  */
 class TranslationSearch
 {

    private $translationArray = [
        "accesslog" => 995,
        "accountinfo" => 1447,
        "batteries" => 1428,
        "bios" => 273,
        "controllers" => 93,
        "cpus" => 54,
        "devices" => 1331,
        "download_history" => 969,
        //"download_servers" => "A ajouter",
        "drives" => 92,
        "groups" => 1445,
        //"groups_cache" => 995,
        "hardware" => 23,
        "inputs" => 91,
        //"itmgmt_comments" => 995,
        //"javainfo" => 995,
        //"journallog" => 995,
        "locks" => 977,
        "memories" => 26,
        "modems" => 270,
        "monitors" => 97,
        "networks" => 1327,
        "ports" => 272,
        "printers" => 79,
        "registry" => 257,
        "repository" => 1421,
        "sim" => 1429,
        "slots" => 271,
        "softwares" => 765,
        "sounds" => 96,
        "storages" => 63,
        "usbdevices" => 1444,
        "videos" => 61,
        "virtualmachines" => 1266,
        "id" => 1402,
        "hardware_id" => 1433,
        "userid" => 1434,
        "logdate" => 232,
        "processes" => 1436,
        "location" => 1435,
        "manufacturer" => 64,
        "manufacturedate" => 360,
        "serialnumber" => 36,
        "name" => 49,
        "chemistry" => 1437,
        "designcapacity" => 83,
        "designvoltage" => 1319,
        "sbdsversion" => 1438,
        "maxerror" => 1439,
        "oemspecific" => 1440,
        "smanufacturer" => 64,
        "smodel" => 65,
        "ssn" => 36,
        "type" => 66,
        "bmanufacturer" => 855,
        "bversion" => 209,
        "bdate" => 210,
        "assettag" => 216,
        "mmanufacturer" => 1383,
        "mmodel" => 1384,
        "msn" => 1382,
        "caption" => 80,
        "description" => 53,
        "version" => 277,
        "speed" => 268,
        "cores" => 1317,
        "l2cachesize" => 1318,
        "cpuarch" => 1247,
        "data_width" => 1312,
        "current_address_width" => 1313,
        "logical_cpus" => 1314,
        "voltage" => 1319,
        "current_speed" => 1315,
        "socket" => 1316,
        "comments" => 51,
        "pkg_id" => 512,
        "pkg_name" => 1037,
        "comments" => 51,
        "letter" => 85,
        "filesystem" => 86,
        "total" => 87,
        "free" => 45,
        "numfiles" => 137,
        "volumn" => 70,
        "createdate" => 232,
        "request" => 615,
        "create_time" => 232,
        "revalidate_time" => 1441,
        "xmldef" => 1442,
        "deviceid" => 1417,
        "workgroup" => 33,
        "userdomain" => 557,
        "osname" => 25,
        "osversion" => 275,
        "oscomments" => 286,
        "processort" => 350,
        "processors" => 377,
        "memory" => 568,
        "swap" => 50,
        "ipaddr" => 34,
        "dns" => 318,
        "defaultgateway" => 1443,
        "lastdate" => 652,
        "lastcome" => 352,
        "quality" => 353,
        "fidelity" => 354,
        "userid" => 24,
        "wincompany" => 51,
        "winowner" => 348,
        "winprodid" => 111,
        "winprodkey" => 553,
        "useragent" => 357,
        //"checksum" => "",
        // "sstate" => "",
        "ipsrc" => 34,
        //"uuid" => "",
        "arch" => 1247,
        "interface" => 1247,
        //"pointtype" => 1247,
        "arch" => 1247,
        "purpose" => 283,
        "numslots" => 94,
        "model" => 1446,
        "serial" => 36,
        "typemib" => 280,
        "mtu" => 7016,
        "macaddr" => 95,
        "status" => 81,
        "ipaddress" => 869,
        "ipmask" => 870,
        "ipgateway" => 207,
        "ipsubnet" => 331,
        "ipdhcp" => 281,
        //"virtualdev" => 36,
        "driver" => 278,
        "port" => 272,
        "servername" => 1323,
        "sharename" => 1324,
        "resolution" => 1325,
        "comment" => 51,
        "shared" => 1326,
        "network" => 1327,
        "regvalue" => 213,
        "baseurl" => 1427,
        "exclude" => 600,
        "excluded" => 614,
        "expire" => 1422,
        //"filename" => 213,
        "mirrors" => 1424,
        "pkgs" => 498,
        "revision" => 18,
        "size" => 953,
        "tag" => 1425,
        "updated" => 1426,
        "operator" => 677,
        "opname" => 1416,
        "country" => 1418,
        //"pshare" => 1418,
        "designation" => 70,
        "publisher" => 69,
        "folder" => 1248,
        "filesize" => 1240,
        //"source" => 70,
        //"guid" => 1012,
        "language" => 1012,
        "installdate" => 1238,
        "bitswidth" => 1247,
        //"disksize" => 1247,
        "firmware" => 1229,
        "chipset" => 276,
        "screen horizontal / vertical" => 1325,
        "subsystem" => 25,
        "vmtype" => 66,
        "vcpu" => 54,
    ];

    private $operatorsArray = [
        "EQUAL" => 1430,
        "MORE" => 1431,
        "LESS" => 1432,
        "LIKE" => 129,
        "DIFFERENT" => 130,
    ];

    public function getTranslationFor($name){
        global $l;
        $name = strtolower($name);
        if(empty($l->g($this->translationArray[$name]))){
            return $name;
        }
        return $l->g($this->translationArray[$name]);
    }

    public function getTranslationForOperator($name){
        global $l;
        return $l->g($this->operatorsArray[$name]);
    }

    public function getTranslationForListField($string){
        global $l;

        $values = explode(".", $string);

        if(!empty($l->g($this->translationArray[$values[0]]))){
            $table = $l->g($this->translationArray[$values[0]]);
        }else{
            $table = $values[0];
        }

        $name = strtolower($values[1]);

        if(!empty($l->g($this->translationArray[$name]))){
            $name = $l->g($this->translationArray[$name]);
        }elseif(strpos($name, 'fields_') !== false){
            $accountInfoSearch = new AccountinfoSearch();
            $translateAccount = $accountInfoSearch->getAccountInfosList();
            $name = $translateAccount['COMPUTERS'][$name];
        }

        return $table." : ".$name;

    }

 }
