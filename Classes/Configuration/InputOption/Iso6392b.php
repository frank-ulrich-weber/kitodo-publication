<?php
namespace EWW\Dpf\Configuration\InputOption;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class Iso6392b extends \EWW\Dpf\Configuration\InputOption\AbstractInputOption
{

    protected $values = array(
        "aar", "abk", "ace", "ach", "ada", "ady", "afa", "afh", "afr", "ain",
        "aka", "akk", "alb", "ale", "alg", "alt", "amh", "ang", "anp", "apa",
        "ara", "arc", "arg", "arm", "arn", "arp", "art", "arw", "asm", "ast",
        "ath", "aus", "ava", "ave", "awa", "aym", "aze", "bad", "bai", "bak",
        "bal", "bam", "ban", "baq", "bas", "bat", "bej", "bel", "bem", "ben",
        "ber", "bho", "bih", "bik", "bin", "bis", "bla", "bnt", "bos", "bra",
        "bre", "btk", "bua", "bug", "bul", "bur", "byn", "cad", "cai", "car",
        "cat", "cau", "ceb", "cel", "cha", "chb", "che", "chg", "chi", "chk",
        "chm", "chn", "cho", "chp", "chr", "chu", "chv", "chy", "cmc", "cop",
        "cor", "cos", "cpe", "cpf", "cpp", "cre", "crh", "crp", "csb", "cus",
        "cze", "dak", "dan", "dar", "day", "del", "den", "dgr", "din", "div",
        "doi", "dra", "dsb", "dua", "dum", "dut", "dyu", "dzo", "efi", "egy",
        "eka", "elx", "eng", "enm", "epo", "est", "ewe", "ewo", "fan", "fao",
        "fat", "fij", "fil", "fin", "fiu", "fon", "fre", "frm", "fro", "frr",
        "frs", "fry", "ful", "fur", "gaa", "gay", "gba", "gem", "geo", "ger",
        "gez", "gil", "gla", "gle", "glg", "glv", "gmh", "goh", "gon", "gor",
        "got", "grb", "grc", "gre", "grn", "gsw", "guj", "gwi", "hai", "hat",
        "hau", "haw", "heb", "her", "hil", "him", "hin", "hit", "hmn", "hmo",
        "hrv", "hsb", "hun", "hup", "iba", "ibo", "ice", "ido", "iii", "ijo",
        "iku", "ile", "ilo", "ina", "inc", "ind", "ine", "inh", "ipk", "ira",
        "iro", "ita", "jav", "jaw", "jbo", "jpn", "jpr", "jrb", "kaa", "kab",
        "kac", "kal", "kam", "kan", "kar", "kas", "kau", "kaw", "kaz", "kbd",
        "kha", "khi", "khm", "kho", "kik", "kin", "kir", "kmb", "kok", "kom",
        "kon", "kor", "kos", "kpe", "krc", "krl", "kro", "kru", "kua", "kum",
        "kur", "kut", "lad", "lah", "lam", "lao", "lat", "lav", "lez", "lim",
        "lin", "lit", "lol", "loz", "ltz", "lua", "lub", "lug", "lui", "lun",
        "luo", "lus", "mac", "mad", "mag", "mah", "mai", "mak", "mal", "man",
        "mao", "map", "mar", "mas", "may", "mdf", "mdr", "men", "mga", "mic",
        "min", "mis", "mkh", "mlg", "mlt", "mnc", "mni", "mno", "moh", "mol",
        "mon", "mos", "mul", "mun", "mus", "mwl", "mwr", "myn", "myv", "nah",
        "nai", "nap", "nau", "nav", "nbl", "nde", "ndo", "nds", "nep", "new",
        "nia", "nic", "niu", "nno", "nob", "nog", "non", "nor", "nqo", "nso",
        "nub", "nwc", "nya", "nym", "nyn", "nyo", "nzi", "oci", "oji", "ori",
        "orm", "osa", "oss", "ota", "oto", "paa", "pag", "pal", "pam", "pan",
        "pap", "pau", "peo", "per", "phi", "phn", "pli", "pol", "pon", "por",
        "pra", "pro", "pus", "que", "raj", "rap", "rar", "roa", "roh", "rom",
        "rum", "run", "rup", "rus", "sad", "sag", "sah", "sai", "sal", "sam",
        "san", "sas", "sat", "scn", "sco", "sel", "sem", "sga", "sgn", "shn",
        "sid", "sin", "sio", "sit", "sla", "slo", "slv", "sma", "sme", "smi",
        "smj", "smn", "smo", "sms", "sna", "snd", "snk", "sog", "som", "son",
        "sot", "spa", "srd", "srn", "srp", "srr", "ssa", "ssw", "suk", "sun",
        "sus", "sux", "swa", "swe", "syc", "syr", "tah", "tai", "tam", "tat",
        "tel", "tem", "ter", "tet", "tgk", "tgl", "tha", "tib", "tig", "tir",
        "tiv", "tkl", "tlh", "tli", "tmh", "tog", "ton", "tpi", "tsi", "tsn",
        "tso", "tuk", "tum", "tup", "tur", "tut", "tvl", "twi", "tyv", "udm",
        "uga", "uig", "ukr", "umb", "und", "urd", "uzb", "vai", "ven", "vie",
        "vol", "vot", "wak", "wal", "war", "was", "wel", "wen", "wln", "wol",
        "xal", "xho", "yao", "yap", "yid", "yor", "ypk", "zap", "zbl", "zen",
        "zha", "znd", "zul", "zun", "zxx", "zza",
    );

    public function getValuesString()
    {
        return implode('|', $this->values);
    }

}
