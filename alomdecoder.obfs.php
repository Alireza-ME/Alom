<?php

(function () {
    if (!defined('ALOM_VERSION')) {
        define('ALOM_VERSION', '3.0.0');
    }
    if (!defined('ALOM_VERSION_NUMBER')) {
        define('ALOM_VERSION_NUMBER', 30000);
    }
    if (!defined('T_NULLSAFE_OBJECT_OPERATOR')) {
        define('T_NULLSAFE_OBJECT_OPERATOR', null);
    }
    if (!defined('T_FN')) {
        define('T_FN', null);
    }
    if (!defined('T_COALESCE')) {
        define('T_COALESCE', null);
    }
    if (!defined('T_COALESCE_EQUAL')) {
        define('T_COALESCE_EQUAL', null);
    }
    if (!defined('T_NAME_FULLY_QUALIFIED')) {
        define('T_NAME_FULLY_QUALIFIED', null);
    }
    if (!defined('T_NAME_QUALIFIED')) {
        define('T_NAME_QUALIFIED', null);
    }
    if (!defined('T_NAME_RELATIVE')) {
        define('T_NAME_RELATIVE', null);
    }
    if (!defined('T_READONLY')) {
        define('T_READONLY', null);
    }
    if (!defined('T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG')) {
        define('T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG', null);
    }

    class AlomDecoder
    {
        public static $_d6ac1 = true;
        private static $_50f4f = 1;
        private static $_c3392 = array(0x67452301, 0xefcdab89);
        private static $_ab0da = array();
        public static $_c3a8f = array();
        public static $_ae916 = array();
        public static $vrs = array();
        public static $partition = array();
        public static $_9ad21 = array();
        public static $rtnev;
        public static $_89d28;
        public static $_bec53;
        public static $iscli = true;
        private static $_9943d;
        private static $_09ac8;
        private static $_2b9dc = array();

        public static function protectvar(&$_2d03b)
        {
            self::$_2b9dc[] =& $_2d03b;
        }

        public static function uspv()
        {
            foreach (self::$_2b9dc as &$_5fa3c) $_5fa3c = null;
            self::$vrs = array();
        }

        private static $_cdb4c = [0x7c, 0x12, 0x9a, 0x4d, 0x03, 0xd8, 0x63, 0x51, 0x75, 0x5b, 0x70, 0x7d, 0x58, 0x20, 0x0a, 0x60, 0xe3, 0xfd, 0x8d, 0xc2, 0xeb, 0x05, 0x6f, 0x09, 0x7a, 0x25, 0xce, 0xe9, 0x9c, 0x48, 0x35, 0x33, 0xb8, 0x07, 0x14, 0xef, 0x66, 0x16, 0xa6, 0xd2, 0xc0, 0x61, 0xe2, 0x1b, 0x0c, 0xf8, 0x4f, 0x95, 0x45, 0x3b, 0xc4, 0xdc, 0x84, 0x6d, 0x5e, 0xa8, 0xea, 0x54, 0x0f, 0x6c, 0x78, 0x34, 0x8e, 0x0e, 0x19, 0x5a, 0x97, 0xcd, 0x5d, 0x00, 0x1a, 0xab, 0xd9, 0x29, 0x01, 0x43, 0xe0, 0xc5, 0x15, 0xc6, 0x82, 0xae, 0xe7, 0xa1, 0xc7, 0x99, 0x4c, 0x06, 0x90, 0xaa, 0xf6, 0xdd, 0x2b, 0xe8, 0x1d, 0xdb, 0x3d, 0xe5, 0xbf, 0xf2, 0xc3, 0x5f, 0x89, 0xe1, 0x9d, 0x4b, 0x27, 0x77, 0x2c, 0x62, 0x68, 0x57, 0x73, 0x59, 0x38, 0x6e, 0xa0, 0x2a, 0x1f, 0xf9, 0xa9, 0xde, 0x92, 0x0b, 0xf5, 0xee, 0x88, 0xf7, 0x36, 0x8b, 0xc8, 0x08, 0x24, 0x2e, 0x7e, 0xda, 0x79, 0xa5, 0x69, 0x10, 0x3a, 0x23, 0x87, 0xa4, 0xcf, 0xe6, 0x02, 0xf3, 0x3f, 0x7b, 0xd6, 0x50, 0x44, 0x37, 0xb7, 0x72, 0x6b, 0xd0, 0x3e, 0xa3, 0xfc, 0x91, 0x74, 0xfa, 0x0d, 0xcc, 0x7f, 0xe4, 0xbb, 0x71, 0x31, 0x56, 0x9f, 0x53, 0x98, 0xf4, 0xb4, 0xc1, 0x39, 0xad, 0x85, 0x80, 0x96, 0x1e, 0x28, 0xbe, 0xff, 0xf0, 0xed, 0x9b, 0x55, 0xaf, 0xa2, 0x2f, 0x86, 0x32, 0x3c, 0x1c, 0xba, 0xb1, 0x21, 0xca, 0xb0, 0x13, 0x46, 0xd1, 0x18, 0xb2, 0x47, 0x26, 0xd4, 0x30, 0xc9, 0xac, 0x81, 0x8f, 0xd7, 0xbc, 0xb5, 0x93, 0x9e, 0x41, 0x65, 0x64, 0xfb, 0xb3, 0xb6, 0xcb, 0x8c, 0xdf, 0x42, 0xfe, 0x40, 0x17, 0x2d, 0xbd, 0x11, 0xd5, 0x83, 0x04, 0x49, 0xd3, 0xa7, 0x4a, 0x4e, 0x94, 0xec, 0xb9, 0x5c, 0xf1, 0x52, 0x67, 0x76, 0x6a, 0x22, 0x8a];

        private static function strshuffle($_cfaaf)
        {
            $_7886f = strlen($_cfaaf) - 1;
            for ($_7a91f = 0; $_7a91f <= $_7886f; ++$_7a91f) {
                $_f245a = rand(0, $_7886f);
                if ($_f245a != $_7a91f) {
                    $_58551 = $_cfaaf[$_7a91f];
                    $_cfaaf[$_7a91f] = $_cfaaf[$_f245a];
                    $_cfaaf[$_f245a] = $_58551;
                }
            }
            return $_cfaaf;
        }

        private static function arrayshuffle(&$_14ff4)
        {
            $_7886f = count($_14ff4) - 1;
            for ($_7a91f = 0; $_7a91f <= $_7886f; ++$_7a91f) {
                $_f245a = rand(0, $_7886f);
                if ($_f245a != $_7a91f) {
                    $_58551 = $_14ff4[$_7a91f];
                    $_14ff4[$_7a91f] = $_14ff4[$_f245a];
                    $_14ff4[$_f245a] = $_58551;
                }
            }
            return $_14ff4;
        }

        private static function base64decode($_cfaaf)
        {
            $_08046 = strlen($_cfaaf);
            if ($_08046 % 4 !== 0) $_cfaaf .= str_repeat('Q', 4 - $_08046 % 4);
            $_ec5c3 = self::strshuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ+/=");
            $_49860 = '';
            for ($_7a91f = 0; isset($_cfaaf[$_7a91f]); $_7a91f += 4) {
                $_5fd77 = strpos($_ec5c3, $_cfaaf[$_7a91f]);
                $_9f5a1 = strpos($_ec5c3, $_cfaaf[$_7a91f + 1]);
                $_49860 .= chr(($_5fd77 << 2) | ($_9f5a1 >> 4));
                if ($_cfaaf[$_7a91f + 2] != 'Q') {
                    $_455df = strpos($_ec5c3, $_cfaaf[$_7a91f + 2]);
                    $_49860 .= chr((($_9f5a1 & 15) << 4) | ($_455df >> 2));
                    if ($_cfaaf[$_7a91f + 3] != 'Q') {
                        $_e1982 = strpos($_ec5c3, $_cfaaf[$_7a91f + 3]);
                        $_49860 .= chr((($_455df & 3) << 6) | $_e1982);
                    }
                }
            }
            return $_49860;
        }

        private static function decode($_cfaaf, $_93a6d, $_f9268, $_a4768 = false)
        {
            srand($_93a6d ^ $_f9268 & 0x7fffffff);
            $_93a6d ^= rand();
            $_f9268 ^= rand();
            if ($_a4768) {
                if (strlen($_cfaaf) < 2) return $_cfaaf;
                $_50fd3 = $_93a6d ^ $_f9268 ^ rand();
                $_cfaaf = array_values(unpack('C*', $_cfaaf));
                $_cfaaf[0] ^= rand(0, 0xff);
                for ($_7a91f = 0; isset($_cfaaf[$_7a91f + 1]); ++$_7a91f) $_cfaaf[$_7a91f + 1] = ($_cfaaf[$_7a91f] + $_cfaaf[$_7a91f + 1]) ^ (($_93a6d >> ($_7a91f & 63)) & 0xff);
                $_cfaaf[0] = ($_cfaaf[$_7a91f] + $_cfaaf[0]) ^ (($_93a6d >> ($_7a91f & 63)) & 0xff);
                $_cfaaf[0] ^= rand(0, 0xff);
                for ($_7a91f = 0; isset($_cfaaf[$_7a91f + 1]); ++$_7a91f) $_cfaaf[$_7a91f + 1] = ($_cfaaf[$_7a91f] + $_cfaaf[$_7a91f + 1]) ^ (($_f9268 >> ($_7a91f & 63)) & 0xff);
                $_cfaaf[0] = ($_cfaaf[$_7a91f] + $_cfaaf[0]) ^ (($_f9268 >> ($_7a91f & 63)) & 0xff);
                $_cfaaf[0] ^= rand(0, 0xff);
                for ($_7a91f = 0; isset($_cfaaf[$_7a91f + 1]); ++$_7a91f) $_cfaaf[$_7a91f + 1] = ($_cfaaf[$_7a91f] ^ $_cfaaf[$_7a91f + 1]) + (($_50fd3 >> ($_7a91f & 63)) & 0xff) & 0xff;
                $_cfaaf[0] = ($_cfaaf[$_7a91f] ^ $_cfaaf[0]) + (($_50fd3 >> ($_7a91f & 63)) & 0xff) & 0xff;
                $_cfaaf[0] ^= rand(0, 0xff);
                array_unshift($_cfaaf, 'C*');
                return call_user_func_array('pack', $_cfaaf);
            }
            $_9ea9f = range(0, 0xff);
            $_8f2b7 = range(0, 0xff);
            self::arrayshuffle($_9ea9f);
            self::arrayshuffle($_8f2b7);
            $_7886f = strlen($_cfaaf);
            $_b296a = ceil(pow($_7886f, 5 / 11));
            $_50fd3 = (int)($_93a6d + $_f9268) & 0xffffffff;
            $_9d70b = ($_a4768 ? -1 : (($_50fd3 & 0x3) ^ (($_50fd3 >> 8) & 0x3) ^ ($_f9268 & 0x3)) + 0x1a) + floor(log($_7886f + 2, 2) - 1);
            $_50fd3 = ($_50fd3 & 0xff) ^ ($_93a6d & 0xff) ^ (($_50fd3 >> 16) & 0xff) ^ 1;
            if ($_7886f == 0) return '';
            if ($_7886f == 1) return chr($_91528[$_c7306[ord($_cfaaf) ^ $_50fd3] ^ $_50fd3] ^ $_50fd3);
            $_cfaaf = array_values(unpack('C*', $_cfaaf));
            for ($_b73bd = 0; $_b73bd < $_9d70b; ++$_b73bd) {
                srand(($_93a6d ^ $_f9268) + ($_b73bd * 12329) & 0x7fffffff);
                for ($_7a91f = 0; $_7a91f < $_b296a; ++$_7a91f) {
                    $_06198 = rand(0, $_7886f - 1);
                    $_e31bb = rand(0, $_7886f - 2);
                    $_9dc73 = rand(0, $_7886f - 2);
                    $_be674 = rand(0, $_7886f - 2);
                    if ($_e31bb >= $_06198) ++$_e31bb;
                    if ($_9dc73 >= $_06198) ++$_9dc73;
                    if ($_be674 >= $_06198) ++$_be674;
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] + $_cfaaf[$_9dc73] & 0xff] ^ $_cfaaf[$_be674];
                    $_cfaaf[$_06198] = $_9ea9f[$_cfaaf[$_06198] + $_cfaaf[$_be674] & 0xff] ^ $_cfaaf[$_e31bb];
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] ^ $_cfaaf[$_e31bb]] + $_cfaaf[$_9dc73] & 0xff;
                    $_cfaaf[$_06198] ^= $_50fd3;
                    $_cfaaf[$_06198] = $_9ea9f[$_cfaaf[$_06198] ^ $_cfaaf[$_be674]] + $_cfaaf[$_be674] & 0xff;
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] + $_cfaaf[$_e31bb] & 0xff] + $_cfaaf[$_e31bb] & 0xff;
                    $_cfaaf[$_06198] = $_9ea9f[$_8f2b7[$_cfaaf[$_06198] ^ $_cfaaf[$_be674]] + $_cfaaf[$_9dc73] & 0xff] ^ $_8f2b7[$_cfaaf[$_e31bb]];
                    $_cfaaf[$_e31bb] = $_9ea9f[$_cfaaf[$_e31bb] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                    $_cfaaf[$_be674] = $_8f2b7[$_cfaaf[$_be674] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                    $_cfaaf[$_9dc73] = $_9ea9f[$_cfaaf[$_9dc73] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                }
            }
            array_unshift($_cfaaf, 'C*');
            return call_user_func_array('pack', $_cfaaf);
        }

        private static function dec($_8b7de, $_93a6d, $_f9268, $_a4768 = false)
        {
            srand($_93a6d ^ $_f9268 & 0x7fffffff);
            $_8b7de = self::decode($_8b7de, rand() ^ $_f9268, rand() ^ $_93a6d, $_a4768);
            return substr($_8b7de, 0, -8);
        }

        public static function decodew($_cfaaf, $_93a6d, $_f9268)
        {
            static $_9ea9f, $_8f2b7;
            if ($_cfaaf === true) {
                $_9ea9f = range(0, 0xff);
                self::arrayshuffle($_9ea9f);
                $_8f2b7 = range(0, 0xff);
                self::arrayshuffle($_8f2b7);
                $_c7306 = array_combine($_9ea9f, array_keys($_9ea9f));
                $_91528 = array_combine($_8f2b7, array_keys($_8f2b7));
                return;
            }
            $_93a6d ^= 0x392cc908;
            $_f9268 ^= 0x33541515;
            $_93a6d ^= $_9ea9f[$_93a6d & 0xff] ^ 0xafb655d5;
            $_f9268 ^= $_8f2b7[$_f9268 & 0xff] ^ 0x9cd52c07;
            $_7886f = strlen($_cfaaf);
            $_50fd3 = (int)($_93a6d + $_f9268) & 0xffffffff;
            $_9d70b = (($_50fd3 & 0x5) ^ (($_50fd3 >> 8) & 0x5) ^ ($_f9268 & 0x5)) + 0xa + floor(log($_7886f + 2, 2) - 1);
            $_50fd3 = ($_50fd3 & 0xff) ^ ($_93a6d & 0xff) ^ (($_50fd3 >> 16) & 0xff);
            if ($_7886f == 0) return '';
            if ($_7886f == 1) return chr($_9ea9f[$_8f2b7[ord($_cfaaf) ^ $_50fd3] ^ $_50fd3] ^ $_50fd3);
            $_ef28b = $_7886f - 1;
            $_cfaaf = array_values(unpack('C*', $_cfaaf));
            for ($_b73bd = 0; $_b73bd < $_9d70b; ++$_b73bd) {
                for ($_7a91f = 0; $_7a91f < $_7886f; ++$_7a91f) {
                    $_06198 = (($_7a91f * 0xf) % $_7886f + 0x37d973 + $_b73bd) % $_7886f;
                    $_e31bb = (($_7a91f * 0xb) % $_ef28b + ($_06198 * 0x9) % $_ef28b + 0x2e1081) % $_ef28b;
                    $_9dc73 = (($_7a91f * 0x7) % $_ef28b + ($_e31bb * 0x9) % $_ef28b + 0x105977) % $_ef28b;
                    $_be674 = (($_7a91f * 0x3) % $_ef28b + ($_9dc73 * 0x1) % $_ef28b + 0x17d10f) % $_ef28b;
                    if ($_e31bb >= $_06198) ++$_e31bb;
                    if ($_9dc73 >= $_06198) ++$_9dc73;
                    if ($_be674 >= $_06198) ++$_be674;
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] + $_cfaaf[$_9dc73] & 0xff] ^ $_cfaaf[$_be674];
                    $_cfaaf[$_06198] = $_9ea9f[$_cfaaf[$_06198] + $_cfaaf[$_be674] & 0xff] ^ $_cfaaf[$_e31bb];
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] ^ $_cfaaf[$_e31bb]] + $_cfaaf[$_9dc73] & 0xff;
                    $_cfaaf[$_06198] ^= $_50fd3;
                    $_cfaaf[$_06198] = $_9ea9f[$_cfaaf[$_06198] ^ $_cfaaf[$_be674]] + $_cfaaf[$_be674] & 0xff;
                    $_cfaaf[$_06198] = $_8f2b7[$_cfaaf[$_06198] + $_cfaaf[$_e31bb] & 0xff] + $_cfaaf[$_e31bb] & 0xff;
                    $_cfaaf[$_06198] = $_9ea9f[$_8f2b7[$_cfaaf[$_06198] ^ $_cfaaf[$_be674]] + $_cfaaf[$_9dc73] & 0xff] ^ $_8f2b7[$_cfaaf[$_e31bb]];
                    $_cfaaf[$_e31bb] = $_9ea9f[$_cfaaf[$_e31bb] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                    $_cfaaf[$_be674] = $_8f2b7[$_cfaaf[$_be674] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                    $_cfaaf[$_9dc73] = $_9ea9f[$_cfaaf[$_9dc73] ^ $_cfaaf[$_06198] ^ $_50fd3] + $_cfaaf[$_06198] & 0xff;
                }
            }
            array_unshift($_cfaaf, 'C*');
            return call_user_func_array('pack', $_cfaaf);
        }

        private static function decw($_8b7de, $_93a6d, $_f9268)
        {
            $_8b7de = self::decodew($_8b7de, $_f9268 ^ 0x47b426f6, $_93a6d ^ 0xaad9d133);
            return substr($_8b7de, 0, -4);
        }

        public static function optwister_decode($_fb451, $_3741c)
        {
            $_6dd35 = self::$_c3a8f[$_3741c];
            $_e7b30 = $_6dd35[0];
            $_bb32e = $_6dd35[1];
            $_6dd35 = $_6dd35[2];
            $_fb451 = base64_decode($_fb451);
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_6dd35[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = self::dec($_fb451, $_e7b30, $_bb32e, true);
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_6dd35[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = substr($_fb451, ord($_fb451[0]) + 1);
            return $_fb451;
        }

        public static function optwister_decodr($_fb451, $_3741c)
        {
            $_6dd35 = self::$_ae916[$_3741c];
            $_e7b30 = $_6dd35[0];
            $_bb32e = $_6dd35[1];
            $_6dd35 = $_6dd35[2];
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_6dd35[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = self::dec($_fb451, $_e7b30, $_bb32e, true);
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_6dd35[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = substr($_fb451, ord($_fb451[0]) + 1);
            return $_fb451;
        }

        public static function partition_decode($_fb451, $_c3392, $_3741c)
        {
            $_c3392 = base64_decode($_c3392);
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_c3392[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = self::optwister_decodr($_fb451, $_3741c);
            for ($_7a91f = 0; isset($_fb451[$_7a91f]); ++$_7a91f) $_fb451[$_7a91f] = $_c3392[$_7a91f & 0xf] ^ $_fb451[$_7a91f];
            $_fb451 = gzinflate($_fb451);
            return $_fb451;
        }

        public static function mt_prng_reset()
        {
            self::$_50f4f ^= rand();
            return srand(self::$_50f4f);
        }

        public static function mt_prng_store($_a876e)
        {
            self::$_50f4f ^= rand() ^ $_a876e;
            self::$_50f4f = (int)(self::$_50f4f + 7012329) & 0xffffffff;
            self::$_50f4f ^= 0x23958cde;
            return srand($_a876e);
        }

        public static function fget($_991cf, $_eb934)
        {
            $_944b1 = realpath($_991cf);
            return $_944b1 ? $_944b1 : realpath($_eb934 . '/' . $_991cf);
        }

        public static function string_decrypt($_fb451, $_c3392)
        {
            $_cdb4c = self::$_cdb4c;
            if (strlen($_c3392) == 64) $_c3392 = hex2bin($_c3392); elseif (strlen($_c3392) != 32) $_c3392 = hash('sha256', $_c3392, true);
            $_6749b = strlen($_fb451);
            $_fb451 = array_values(unpack('C*', $_fb451));
            $_c3392 = array_values(unpack('C*', $_c3392));
            for ($_5a0d9 = 0; $_5a0d9 < 52; ++$_5a0d9) {
                for ($_7a91f = 0; $_7a91f < $_6749b; ++$_7a91f) {
                    $_41fb4 = (7 * $_7a91f + 1) % $_6749b;
                    $_266ee = (3 * $_7a91f + $_41fb4 + 7) % $_6749b;
                    $_535ea = (11 * $_7a91f + $_266ee + 5) % $_6749b;
                    if ($_41fb4 == $_7a91f) $_41fb4 = (3 * $_41fb4 + 5) % $_6749b;
                    if ($_266ee == $_7a91f) $_266ee = (7 * $_266ee + 13) % $_6749b;
                    if ($_535ea == $_7a91f) $_535ea = (11 * $_535ea + 3) % $_6749b;
                    $_36028 = $_c3392[(3 * $_535ea + 5 * $_7a91f + 7) % 32];
                    $_0b780 = $_c3392[(5 * $_41fb4 + 7 * $_7a91f + 11) % 32];
                    $_5d356 = $_c3392[(7 * $_266ee + 11 * $_7a91f + 3) % 32];
                    for ($_aa7da = 0; $_aa7da < 2; ++$_aa7da) {
                        $_36028 = $_c3392[(3 * $_535ea + 5 * $_5d356 + 7 * $_7a91f + 11) % 32];
                        $_0b780 = $_c3392[(5 * $_41fb4 + 7 * $_36028 + 11 * $_7a91f + 3) % 32];
                        $_5d356 = $_c3392[(7 * $_266ee + 11 * $_0b780 + 3 * $_7a91f + 5) % 32];
                    }
                    $_36028 = (3 * $_535ea + 5 * $_5d356 + 7 * $_7a91f + 11) % 32;
                    $_0b780 = (5 * $_41fb4 + 7 * $_36028 + 11 * $_7a91f + 3) % 32;
                    $_5d356 = (7 * $_266ee + 11 * $_0b780 + 3 * $_7a91f + 5) % 32;
                    $_fb451[$_7a91f] = $_cdb4c[$_fb451[$_7a91f] ^ $_c3392[$_36028] ^ $_cdb4c[$_fb451[$_41fb4] ^ $_fb451[$_266ee]]] ^ $_36028;
                    $_fb451[$_7a91f] = $_cdb4c[$_fb451[$_7a91f] ^ $_c3392[$_36028] ^ $_cdb4c[$_fb451[$_266ee] & $_fb451[$_535ea]]] ^ $_0b780;
                    $_fb451[$_7a91f] = $_cdb4c[$_fb451[$_7a91f] ^ $_c3392[$_0b780] ^ $_cdb4c[$_fb451[$_41fb4] | $_fb451[$_535ea]]] ^ $_5d356;
                    $_fb451[$_7a91f] = $_cdb4c[$_fb451[$_7a91f] ^ $_c3392[$_5d356] ^ $_cdb4c[$_fb451[$_41fb4] & $_fb451[$_266ee]]] ^ $_535ea & 0xff;
                    $_fb451[$_7a91f] = $_cdb4c[$_fb451[$_7a91f] ^ $_c3392[$_5d356] ^ $_cdb4c[$_fb451[$_266ee] ^ $_fb451[$_535ea]]] ^ $_41fb4 & 0xff;
                }
            }
            array_unshift($_fb451, 'C*');
            $_fb451 = call_user_func_array('pack', $_fb451);
            return $_fb451;
        }

        public static function include_key_generate($_524e4 = null)
        {
            if ($_524e4 === null) return bin2hex(random_bytes(32)); else return hash('sha256', "Alom Include N&.~>.ZYv;V5lU2h " . (string)$_524e4 . '#');
        }

        public static function include_key_decrypt($code, $_c3392)
        {
            if (strlen($_c3392) != 64) $_c3392 = self::include_key_generate($_c3392);
            $_dae93 = substr($code, 0, 32);
            if (hash("sha256", $_c3392, true) != $_dae93) {
                return $code;
            }
            $code = substr($code, 32);
            $code = self::string_decrypt($code, $_c3392);
            $code = gzinflate($code);
            return $code;
        }

        public static function license_key_generate($_524e4)
        {
            return hash('sha256', "Alom License N&.~>.ZYv;V5lN0h " . (string)$_524e4 . '%', true);
        }

        public static function license_find_code($_58e00)
        {
            if (!preg_match("/license code: (\[[0-9a-fA-F*-]+])/i", $_58e00, $_07f9d)) return false;
            return $_07f9d[1];
        }

        public static function license_insert_code($_58e00, $code = '[************************************************-********************************-****************]')
        {
            return preg_replace("/license code: (\[[0-9a-fA-F*-]+])/i", 'license code: ' . $code, $_58e00);
        }

        public static function license_systemhash_generate($_d91e4)
        {
            $_b1632 = "SYSTEMHASH Xcpv{E^Bk9eq\*VIm";
            if (!is_array($_d91e4)) $_d91e4 = (array)$_d91e4;
            $_0408d = 0x5;
            if (isset($_d91e4['uname'])) {
                $_0408d ^= 0x1;
                $_b1632 .= "un:" . $_d91e4['uname'] . "\n";
            }
            if (isset($_d91e4['username'])) {
                $_0408d ^= 0x2;
                $_b1632 .= "us:" . $_d91e4['username'] . "\n";
            }
            if (isset($_d91e4['ipaddr'])) {
                $_0408d ^= 0x4;
                $_b1632 .= "ip:" . $_d91e4['ipaddr'] . "\n";
            }
            if (isset($_d91e4['hostname'])) {
                $_0408d ^= 0x8;
                $_b1632 .= "hn:" . $_d91e4['hostname'] . "\n";
            }
            $_dae93 = md5($_b1632);
            $_dae93[0] = dechex($_0408d);
            return hex2bin($_dae93);
        }

        public static function license_code_decrypt($_fb451, $_a68f9)
        {
            $_cdb4c = self::$_cdb4c;
            if (strlen($_a68f9) == 64) $_a68f9 = hex2bin($_a68f9); elseif (strlen($_a68f9) != 32) $_a68f9 = self::license_key_generate($_a68f9);
            $_74169 = "%zqYJ3}rX\xfeZ2hA.]Ss0(Xv1z";
            $_fb451 = hex2bin(str_replace([' ', "\n", "\r", "\t", '-', '[', ']', '*'], '', $_fb451));
            $_fb451 = self::string_decrypt($_fb451, $_a68f9);
            if (substr($_fb451, 0, 24) != $_74169) return false;
            $_abccc = unpack('N2', substr($_fb451, 40, 8));
            return ['systemhash' => substr($_fb451, 24, 16), 'ready' => $_abccc[1] ^ 0xf9a02eec, 'expiration' => $_abccc[2] ^ 0x2904a19b];
        }

        public static function phpify($code, $_1dc4c = null)
        {
            $_60d9e = token_get_all($code);
            $code = '';
            for ($_7a91f = 0; isset($_60d9e[$_7a91f]); ++$_7a91f) if (is_array($_60d9e[$_7a91f])) if ($_1dc4c && $_60d9e[$_7a91f][0] == T_FILE) $code .= 'ALOM' . $_1dc4c . '_OUTER_FILE'; elseif ($_1dc4c && $_60d9e[$_7a91f][0] == T_DIR) $code .= 'ALOM' . $_1dc4c . '_OUTER_DIR';
            elseif ($_7a91f == 0 && $_60d9e[$_7a91f][0] == T_INLINE_HTML) {
                $_511c0 = htmlentities($_60d9e[$_7a91f][1]);
                $_511c0 = $_511c0 == $_60d9e[$_7a91f][1] ? 'print "' . $_511c0 . '"' : 'print html_entity_decode("' . $_511c0 . '")';
                if (isset($_60d9e[$_7a91f + 1])) {
                    if ($_60d9e[++$_7a91f][0] == T_OPEN_TAG_WITH_ECHO) $code .= "<" . "?php $_511c0;echo "; else $code .= "<" . "?php $_511c0;";
                } else $code .= "<" . "?php $_511c0; ?" . ">";
            } elseif ($_60d9e[$_7a91f][0] == T_CLOSE_TAG && isset($_60d9e[$_7a91f + 1])) {
                if ($_60d9e[++$_7a91f][0] == T_OPEN_TAG_WITH_ECHO) $code .= ";echo "; elseif ($_60d9e[$_7a91f][0] == T_OPEN_TAG) $code .= ';';
                elseif ($_60d9e[$_7a91f][0] == T_INLINE_HTML) {
                    $_511c0 = htmlentities($_60d9e[$_7a91f][1]);
                    $_511c0 = $_511c0 == $_60d9e[$_7a91f][1] ? 'print "' . $_511c0 . '"' : 'print html_entity_decode("' . $_511c0 . '")';
                    if (isset($_60d9e[$_7a91f + 1])) {
                        if ($_60d9e[++$_7a91f][0] == T_OPEN_TAG_WITH_ECHO) $code .= ";$_511c0;echo "; else $code .= ";$_511c0;";
                    } else $code .= ";$_511c0; ?" . ">";
                }
            } elseif ($_60d9e[$_7a91f][0] == T_OPEN_TAG_WITH_ECHO) $code .= "<" . "?php echo ";
            else $code .= $_60d9e[$_7a91f][1]; else $code .= $_60d9e[$_7a91f];
            if ($code === '') $code = '<' . '?php ?' . '>'; elseif (substr($code, -2, 2) != '?' . '>') $code .= '?' . '>';
            unset($_60d9e);
            $code = str_replace("?" . "><" . "?php", '', rtrim($code));
            $code .= "<" . "?php return 1; ?" . ">";
            return $code;
        }

        public static function php_ender($code)
        {
            $_60d9e = token_get_all($code);
            $_3e651 = true;
            for ($_7a91f = 0; isset($_60d9e[$_7a91f]); ++$_7a91f) if ($_60d9e[$_7a91f][0] == T_OPEN_TAG || $_60d9e[$_7a91f][0] == T_OPEN_TAG_WITH_ECHO) $_3e651 = false; elseif ($_60d9e[$_7a91f][0] == T_CLOSE_TAG) $_3e651 = true;
            if (!$_3e651) $code .= '?>';
            return $code;
        }

        private static function readl($_60d9e, $_41fb4, $_266ee, &$_7a91f)
        {
            $_8b7de = '';
            $_2f67e = 0;
            do {
                if (is_array($_60d9e[$_7a91f])) {
                    $_8b7de .= $_60d9e[$_7a91f][1];
                    if (($_60d9e[$_7a91f][0] == T_CURLY_OPEN || $_60d9e[$_7a91f][0] == T_DOLLAR_OPEN_CURLY_BRACES) && $_41fb4 == '{') ++$_2f67e;
                } else {
                    $_8b7de .= $_60d9e[$_7a91f];
                    if ($_60d9e[$_7a91f] == $_41fb4) ++$_2f67e; elseif ($_60d9e[$_7a91f] == $_266ee) --$_2f67e;
                }
            } while (isset($_60d9e[++$_7a91f]) && $_2f67e != 0);
            --$_7a91f;
            return $_8b7de;
        }

        private static function readsl($_60d9e, &$_7a91f, $_73cb5 = false)
        {
            $_8b7de = '';
            $_3a27a = $_73cb5 ? array(')', ']', '}', ';') : array(')', ']', '}', ',', ';');
            for (++$_7a91f; isset($_60d9e[$_7a91f]); ++$_7a91f) if (in_array($_60d9e[$_7a91f], $_3a27a)) break; elseif ($_60d9e[$_7a91f] == ',') {
                $_8b7de .= $_60d9e[$_7a91f++];
                $_8b7de .= self::readws($_60d9e, $_7a91f);
                --$_7a91f;
            } elseif (is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_CLOSE_TAG) break;
            elseif (is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_START_HEREDOC) {
                $_8b7de .= $_60d9e[$_7a91f++][1];
                for (; isset($_60d9e[$_7a91f]) && (!is_array($_60d9e[$_7a91f]) || $_60d9e[$_7a91f][0] != T_END_HEREDOC); ++$_7a91f) $_8b7de .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f][1] : $_60d9e[$_7a91f];
                $_8b7de .= $_60d9e[$_7a91f][1];
            } elseif (is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_STRING, T_WHITESPACE, T_VARIABLE, T_CONSTANT_ENCAPSED_STRING, T_LNUMBER, T_DNUMBER, T_DIR, T_FILE, T_FUNC_C, T_LINE, T_METHOD_C, T_NS_C, T_TRAIT_C, T_CLASS_C, T_ARRAY_CAST, T_BOOL_CAST, T_DOUBLE_CAST, T_INT_CAST, T_OBJECT_CAST, T_STRING_CAST, T_UNSET_CAST, T_PRINT, T_ECHO, T_EXIT, T_ISSET, T_UNSET, T_ARRAY, T_EVAL, T_FN, T_INCLUDE, T_INCLUDE_ONCE, T_REQUIRE, T_REQUIRE_ONCE, T_DOUBLE_COLON, T_OBJECT_OPERATOR, T_NULLSAFE_OBJECT_OPERATOR, T_COALESCE, T_COALESCE_EQUAL, T_IS_GREATER_OR_EQUAL, T_IS_SMALLER_OR_EQUAL, T_IS_EQUAL, T_IS_IDENTICAL, T_IS_NOT_EQUAL, T_IS_NOT_IDENTICAL, T_LOGICAL_AND, T_LOGICAL_OR, T_LOGICAL_XOR, T_SL, T_SR, T_POW, T_NS_SEPARATOR, T_AND_EQUAL, T_OR_EQUAL, T_XOR_EQUAL, T_PLUS_EQUAL, T_MINUS_EQUAL, T_MUL_EQUAL, T_DIV_EQUAL, T_MOD_EQUAL, T_POW_EQUAL, T_SL_EQUAL, T_SR_EQUAL, T_CONCAT_EQUAL, T_DEC, T_INC, T_BOOLEAN_AND, T_BOOLEAN_OR, T_STRING_VARNAME, T_NAME_FULLY_QUALIFIED, T_NAME_QUALIFIED, T_NAME_RELATIVE))) {
                $_8b7de .= $_60d9e[$_7a91f][1];
            } elseif (is_array($_60d9e[$_7a91f])) break;
            elseif ($_60d9e[$_7a91f] == '(') $_8b7de .= self::readl($_60d9e, '(', ')', $_7a91f);
            elseif ($_60d9e[$_7a91f] == '[') $_8b7de .= self::readl($_60d9e, '[', ']', $_7a91f);
            elseif ($_60d9e[$_7a91f] == '{') $_8b7de .= self::readl($_60d9e, '{', '}', $_7a91f);
            elseif ($_60d9e[$_7a91f] == '"') {
                $_8b7de .= $_60d9e[$_7a91f++];
                for (; isset($_60d9e[$_7a91f]) && $_60d9e[$_7a91f] != '"'; ++$_7a91f) $_8b7de .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f][1] : $_60d9e[$_7a91f];
                $_8b7de .= $_60d9e[$_7a91f];
            } elseif ($_60d9e[$_7a91f] == '`') {
                $_8b7de .= $_60d9e[$_7a91f++];
                for (; isset($_60d9e[$_7a91f]) && $_60d9e[$_7a91f] != '`'; ++$_7a91f) $_8b7de .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f][1] : $_60d9e[$_7a91f];
                $_8b7de .= $_60d9e[$_7a91f];
            } elseif ($_60d9e[$_7a91f] == '$') $_8b7de .= $_60d9e[$_7a91f];
            elseif (in_array($_60d9e[$_7a91f], array('?', ':', '!', '~', '<', '>', '+', '-', '*', '/', '%', '.'))) $_8b7de .= $_60d9e[$_7a91f];
            else break;
            --$_7a91f;
            return $_8b7de;
        }

        private static function readsr($_60d9e, $_7a91f)
        {
            $_8b7de = '';
            $_5a0d9 = 1;
            if ($_60d9e[$_7a91f - $_5a0d9][0] == T_WHITESPACE) $_8b7de = $_60d9e[$_7a91f - ($_5a0d9++)][1] . $_8b7de;
            for (; $_7a91f >= $_5a0d9; ++$_5a0d9) {
                if (in_array($_60d9e[$_7a91f - $_5a0d9], array('(', '[', '{', ',', ';'))) break;
                if (isset($_60d9e[$_7a91f - $_5a0d9 + 3]) && is_array($_60d9e[$_7a91f - $_5a0d9 + 1]) && $_60d9e[$_7a91f - $_5a0d9 + 1][0] == T_WHITESPACE) {
                    if (is_array($_60d9e[$_7a91f - $_5a0d9 + 2]) && in_array($_60d9e[$_7a91f - $_5a0d9 + 2][0], array(T_STRING, T_VARIABLE, T_CONSTANT_ENCAPSED_STRING, T_ARRAY))) {
                        --$_5a0d9;
                        break;
                    } elseif (in_array($_60d9e[$_7a91f - $_5a0d9 + 2], array('$', '"'))) {
                        --$_5a0d9;
                        break;
                    }
                }
                if (is_array($_60d9e[$_7a91f - $_5a0d9])) {
                    if (in_array($_60d9e[$_7a91f - $_5a0d9][0], array(T_STRING, T_WHITESPACE, T_VARIABLE, T_CONSTANT_ENCAPSED_STRING, T_LNUMBER, T_DNUMBER, T_DIR, T_FILE, T_FUNC_C, T_LINE, T_METHOD_C, T_NS_C, T_TRAIT_C, T_CLASS_C, T_ARRAY_CAST, T_BOOL_CAST, T_DOUBLE_CAST, T_INT_CAST, T_OBJECT_CAST, T_STRING_CAST, T_UNSET_CAST, T_PRINT, T_ECHO, T_EXIT, T_ISSET, T_UNSET, T_ARRAY, T_EVAL, T_FN, T_INCLUDE, T_INCLUDE_ONCE, T_REQUIRE, T_REQUIRE_ONCE, T_DOUBLE_COLON, T_OBJECT_OPERATOR, T_NULLSAFE_OBJECT_OPERATOR, T_COALESCE, T_COALESCE_EQUAL, T_IS_GREATER_OR_EQUAL, T_IS_SMALLER_OR_EQUAL, T_IS_EQUAL, T_IS_IDENTICAL, T_IS_NOT_EQUAL, T_IS_NOT_IDENTICAL, T_LOGICAL_AND, T_LOGICAL_OR, T_LOGICAL_XOR, T_SL, T_SR, T_POW, T_NS_SEPARATOR, T_AND_EQUAL, T_OR_EQUAL, T_XOR_EQUAL, T_PLUS_EQUAL, T_MINUS_EQUAL, T_MUL_EQUAL, T_DIV_EQUAL, T_MOD_EQUAL, T_POW_EQUAL, T_SL_EQUAL, T_SR_EQUAL, T_CONCAT_EQUAL, T_DEC, T_INC, T_BOOLEAN_AND, T_BOOLEAN_OR, T_STRING_VARNAME, T_NAME_FULLY_QUALIFIED, T_NAME_QUALIFIED, T_NAME_RELATIVE))) $_8b7de = $_60d9e[$_7a91f - $_5a0d9][1] . $_8b7de; elseif (is_array($_60d9e[$_7a91f - $_5a0d9]) && $_60d9e[$_7a91f - $_5a0d9][0] == T_END_HEREDOC) {
                        $_8b7de = $_60d9e[$_7a91f - ($_5a0d9++)] . $_8b7de;
                        for (; $_7a91f >= $_5a0d9 && (!is_array($_60d9e[$_7a91f - $_5a0d9]) || $_60d9e[$_7a91f - $_5a0d9][0] != T_START_HEREDOC); ++$_5a0d9) $_8b7de = (is_array($_60d9e[$_7a91f - $_5a0d9]) ? $_60d9e[$_7a91f - $_5a0d9][1] : $_60d9e[$_7a91f - $_5a0d9]) . $_8b7de;
                        $_8b7de = $_60d9e[$_7a91f - $_5a0d9] . $_8b7de;
                    } else break;
                } elseif ($_60d9e[$_7a91f - $_5a0d9] == '$') $_8b7de = $_60d9e[$_7a91f - $_5a0d9] . $_8b7de;
                elseif ($_60d9e[$_7a91f - $_5a0d9] == ')') {
                    $_75d32 = self::readr($_60d9e, '(', ')', $_7a91f, $_5a0d9);
                    if (is_array($_60d9e[$_7a91f - $_5a0d9 - 1]) && in_array($_60d9e[$_7a91f - $_5a0d9 - 1][0], array(T_IF, T_ELSEIF, T_WHILE, T_FOR, T_DECLARE, T_ARRAY, T_FOREACH))) {
                        ++$_5a0d9;
                        break;
                    }
                    $_8b7de = $_75d32 . $_8b7de;
                } elseif ($_60d9e[$_7a91f - $_5a0d9] == ']') $_8b7de = self::readr($_60d9e, '[', ']', $_7a91f, $_5a0d9) . $_8b7de;
                elseif ($_60d9e[$_7a91f - $_5a0d9] == '}') {
                    $_75d32 = self::readr($_60d9e, '{', '}', $_7a91f, $_5a0d9, true);
                    if (!$_75d32) {
                        ++$_5a0d9;
                        break;
                    }
                    $_8b7de = $_75d32 . $_8b7de;
                } elseif ($_60d9e[$_7a91f - $_5a0d9] == '"') {
                    $_8b7de = $_60d9e[$_7a91f - ($_5a0d9++)] . $_8b7de;
                    for (; $_7a91f >= $_5a0d9 && $_60d9e[$_7a91f - $_5a0d9] != '"'; ++$_5a0d9) $_8b7de = (is_array($_60d9e[$_7a91f - $_5a0d9]) ? $_60d9e[$_7a91f - $_5a0d9][1] : $_60d9e[$_7a91f - $_5a0d9]) . $_8b7de;
                    $_8b7de = $_60d9e[$_7a91f - $_5a0d9] . $_8b7de;
                } elseif ($_60d9e[$_7a91f - $_5a0d9] == '`') {
                    $_8b7de = $_60d9e[$_7a91f - ($_5a0d9++)] . $_8b7de;
                    for (; $_7a91f >= $_5a0d9 && $_60d9e[$_7a91f - $_5a0d9] != '`'; ++$_5a0d9) $_8b7de = (is_array($_60d9e[$_7a91f - $_5a0d9]) ? $_60d9e[$_7a91f - $_5a0d9][1] : $_60d9e[$_7a91f - $_5a0d9]) . $_8b7de;
                    $_8b7de = $_60d9e[$_7a91f - $_5a0d9] . $_8b7de;
                } elseif (in_array($_60d9e[$_7a91f - $_5a0d9], array('?', ':', '!', '~', '<', '>', '+', '-', '*', '/', '%', '.'))) $_8b7de = $_60d9e[$_7a91f - $_5a0d9] . $_8b7de;
                else break;
            }
            return ltrim($_8b7de);
        }

        private static function readpe($_60d9e, &$_7a91f, $_73cb5 = false)
        {
            $_8b7de = '';
            $_8b7de .= self::readws($_60d9e, $_7a91f);
            if ($_60d9e[$_7a91f] == ';') {
                --$_7a91f;
                return $_8b7de;
            }
            if (is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_CLOSE_TAG) {
                --$_7a91f;
                return $_8b7de;
            }
            if ($_60d9e[$_7a91f] == '(') $_8b7de .= substr(self::readl($_60d9e, '(', ')', $_7a91f), 1, -1); else {
                --$_7a91f;
                $_8b7de .= self::readsl($_60d9e, $_7a91f, $_73cb5);
            }
            return $_8b7de;
        }

        private static function readws($_60d9e, &$_7a91f)
        {
            $_8b7de = '';
            if (isset($_60d9e[$_7a91f]) && is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_WHITESPACE) $_8b7de .= $_60d9e[$_7a91f++][1];
            return $_8b7de;
        }

        private static function readst($_ec34a)
        {
            return is_array($_ec34a) ? $_ec34a[1] : $_ec34a;
        }

        public static function sug($code, $_10251)
        {
            $_60d9e = token_get_all($code);
            $code = '';
            $_7a91f = 0;
            $_7b398 = false;
            $code .= $_60d9e[$_7a91f++][1];
            while (isset($_60d9e[$_7a91f]) && ((is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_WHITESPACE, T_COMMENT, T_DOC_COMMENT))) || $_60d9e[$_7a91f] == ';')) $code .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f++][1] : $_60d9e[$_7a91f++];
            if (isset($_60d9e[$_7a91f]) && is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_NAMESPACE) {
                $code .= $_60d9e[$_7a91f++][1];
                while (is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_WHITESPACE, T_STRING, T_NS_SEPARATOR))) $code .= $_60d9e[$_7a91f++][1];
                if ($_60d9e[$_7a91f] == '{') {
                    $code .= $_60d9e[$_7a91f++];
                    $code .= $_10251;
                    for (; isset($_60d9e[$_7a91f]); ++$_7a91f) $code .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f][1] : $_60d9e[$_7a91f];
                    return $code;
                } else {
                    $code .= $_60d9e[$_7a91f++];
                    while (isset($_60d9e[$_7a91f]) && ((is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_WHITESPACE, T_COMMENT, T_DOC_COMMENT))) || $_60d9e[$_7a91f] == ';')) $code .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f++][1] : $_60d9e[$_7a91f++];
                }
            }
            while (isset($_60d9e[$_7a91f]) && is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_NAMESPACE) {
                $code .= $_60d9e[$_7a91f++][1];
                while (is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_WHITESPACE, T_STRING, T_NS_SEPARATOR))) $code .= $_60d9e[$_7a91f++][1];
                $code .= $_60d9e[$_7a91f++];
                while (isset($_60d9e[$_7a91f]) && ((is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_WHITESPACE, T_COMMENT, T_DOC_COMMENT))) || $_60d9e[$_7a91f] == ';')) $code .= $_60d9e[$_7a91f++][1];
            }
            $code .= $_10251;
            for (; isset($_60d9e[$_7a91f]); ++$_7a91f) $code .= is_array($_60d9e[$_7a91f]) ? $_60d9e[$_7a91f][1] : $_60d9e[$_7a91f];
            return $code;
        }

        public static function unmeaning($_fb451)
        {
            if (self::$_9ad21 === array()) return $_fb451;
            if (in_array($_fb451, array('_ALOM_code', '_ALOM_key', '_ALOM_val', '_ALOM_ike', '_ALOM_result', 'this', '_GET', '_POST', '_REQUEST', '_COOKIE', '_FILES', 'argv', 'argc', '_SERVER', 'GLOBALS', '_SESSION'))) return $_fb451;
            if (in_array($_fb451, self::$_9ad21['free'])) return $_fb451;
            $_dae93 = md5(self::$_9ad21['size'] . self::$_9ad21['salt'] . $_fb451 . self::$_9ad21['prefix'] . 'AlomUnmeaning+' . ALOM_VERSION);
            while (strlen($_dae93) < self::$_9ad21['size']) $_dae93 .= md5(self::$_9ad21['salt'] . $_fb451 . $_dae93);
            return self::$_9ad21['prefix'] . substr($_dae93, 0, self::$_9ad21['size']);
        }

        public static function unmeaning_code($code)
        {
            $_83c96 = "\x23\x20\x41\x4c\x4f\x4d\x20\x41\x4e\x54\x49\x54\x41\x4d\x50\x45\x52\x20\x53\x45\x47\x4d\x45\x4e\x54\x20\x53\x45" . "\x50\x41\x52\x41\x54\x4f\x52\x20\x64\x34\x37\x33\x62\x36\x30\x36\x61\x39";
            if (strpos($code, $_83c96) !== false) {
                return $code;
            }
            $_5b6af = self::$_9ad21['variables'];
            $_6ce7f = self::$_9ad21['deep'];
            $_60d9e = token_get_all($code);
            $code = '';
            $_6ce7f = $_5b6af && $_6ce7f;
            for ($_7a91f = 0; isset($_60d9e[$_7a91f]); ++$_7a91f) if ($_5b6af && is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_VARIABLE) {
                if ($_60d9e[$_7a91f][1] == '$GLOBALS') {
                    if (is_array($_60d9e[++$_7a91f]) && $_60d9e[$_7a91f][0] == T_WHITESPACE) ;
                    if ($_60d9e[$_7a91f] == '[') {
                        $_194f8 = substr(self::readl($_60d9e, '[', ']', $_7a91f), 1, -1);
                        $_194f8 = self::unmeaning_code("<" . "?php $_194f8;?" . ">");
                        $_194f8 = "\AlomDecoder::unmeaning(" . substr($_194f8, 6, -3) . ")";
                        $code .= '$GLOBALS[' . $_194f8 . ']';
                    } else {
                        --$_7a91f;
                        $code .= '$GLOBALS';
                    }
                } else {
                    $_51a2f = substr($_60d9e[$_7a91f][1], 1);
                    $_51a2f = '$' . self::unmeaning($_51a2f);
                    $code .= $_51a2f;
                }
            } elseif ($_5b6af && is_array($_60d9e[$_7a91f]) && $_60d9e[$_7a91f][0] == T_DOLLAR_OPEN_CURLY_BRACES) {
                if (is_array($_60d9e[++$_7a91f]) && $_60d9e[$_7a91f][0] == T_STRING_VARNAME) {
                    $code .= '${' . "\AlomDecoder::unmeaning('" . $_60d9e[$_7a91f][1] . "')";
                } elseif ($_6ce7f) {
                    $_00f7e = self::readpe($_60d9e, $_7a91f);
                    $_00f7e = self::unmeaning_code("<" . "?php $_00f7e;?" . ">");
                    $_00f7e = "\AlomDecoder::unmeaning(" . substr($_00f7e, 6, -3) . ")";
                    $code .= '${' . $_00f7e;
                } else {
                    $code .= '${';
                }
            } elseif ($_6ce7f && is_array($_60d9e[$_7a91f]) && in_array($_60d9e[$_7a91f][0], array(T_EVAL, T_INCLUDE, T_INCLUDE_ONCE, T_REQUIRE, T_REQUIRE_ONCE))) {
                $_c2a71 = $_60d9e[$_7a91f][0];
                $_24f7e = $_60d9e[$_7a91f][1];
                if (is_array($_60d9e[++$_7a91f]) && $_60d9e[$_7a91f][0] == T_WHITESPACE) ;
                if ($_60d9e[$_7a91f] == '(') {
                    $_194f8 = self::readl($_60d9e, '(', ')', $_7a91f);
                    $_194f8 = self::unmeaning_code("<" . "?php " . substr($_194f8, 1, -1) . ";?" . ">");
                    $_194f8 = substr($_194f8, 6, -3);
                    if ($_c2a71 == T_EVAL) {
                        $code .= "eval(\AlomDecoder::unmeaning_eval($_194f8))";
                    } elseif ($_c2a71 == T_INCLUDE || T_REQUIRE) {
                        $code .= "{$_24f7e}(\AlomDecoder::unmeaning_file(\$_ALOM_result=$_194f8,realpath(\$_ALOM_result)))";
                    } else {
                        $code .= "{$_24f7e}(in_array(\$_ALOM_result=$_194f8,get_included_files())?\$_ALOM_result:\AlomDecoder::unmeaning_file(\$_ALOM_result,realpath(\$_ALOM_result)))";
                    }
                } else {
                    $_00f7e = self::readpe($_60d9e, $_7a91f);
                    $_00f7e = self::unmeaning_code("<" . "?php $_00f7e;?" . ">");
                    $_00f7e = substr($_00f7e, 6, -3);
                    if ($_c2a71 == T_EVAL) {
                        $code .= "eval(\AlomDecoder::unmeaning_eval($_00f7e))";
                    } elseif ($_c2a71 == T_INCLUDE || T_REQUIRE) {
                        $code .= "{$_24f7e}(\AlomDecoder::unmeaning_file(\$_ALOM_result=$_00f7e,realpath(\$_ALOM_result)))";
                    } else {
                        $code .= "{$_24f7e}(in_array(\$_ALOM_result=$_00f7e,get_included_files())?\$_ALOM_result:\AlomDecoder::unmeaning_file(\$_ALOM_result,realpath(\$_ALOM_result)))";
                    }
                }
            } elseif (is_array($_60d9e[$_7a91f])) $code .= $_60d9e[$_7a91f][1];
            elseif ($_6ce7f && $_60d9e[$_7a91f] == '$') {
                if ($_60d9e[$_7a91f + 1] == '{') {
                    $_7a91f += 2;
                    $_00f7e = self::readpe($_60d9e, $_7a91f);
                    $_00f7e = self::unmeaning_code("<" . "?php $_00f7e;?" . ">");
                    $_00f7e = "\AlomDecoder::unmeaning(" . substr($_00f7e, 6, -3) . ")";
                    $code .= '${' . $_00f7e;
                } else {
                    $_830ff = 1;
                    while ($_60d9e[++$_7a91f] == '$') ++$_830ff;
                    $code .= str_repeat("\${\AlomDecoder::unmeaning(", $_830ff);
                    if ($_60d9e[$_7a91f][0] == T_VARIABLE) {
                        $_51a2f = substr($_60d9e[$_7a91f][1], 1);
                        $_51a2f = '$' . self::unmeaning($_51a2f);
                        $code .= $_51a2f;
                    } elseif ($_60d9e[$_7a91f] == '{') {
                        ++$_7a91f;
                        $_00f7e = self::readpe($_60d9e, $_7a91f);
                        $_00f7e = self::unmeaning_code("<" . "?php $_00f7e;?" . ">");
                        $_00f7e = "\AlomDecoder::unmeaning(" . substr($_00f7e, 6, -3) . ")";
                        $code .= '${' . $_00f7e;
                    } else--$_7a91f;
                    $code .= str_repeat(")}", $_830ff);
                }
            } else $code .= $_60d9e[$_7a91f];
            return $code;
        }

        public static function unmeaning_eval($code)
        {
            return substr(self::unmeaning_code("<" . "?php $code;?" . ">"), 6, -3);
        }

        public static function real_include_path($_991cf)
        {
            $_e3e40 = getcwd();
            $_2d76f = explode(':', get_include_path());
            $_9839d = false;
            foreach ($_2d76f as $_482c9) {
                chdir(__DIR__);
                $_482c9 = realpath($_482c9);
                if ($_482c9) {
                    chdir($_482c9);
                    if (file_exists($_991cf)) {
                        $_9839d = true;
                        break;
                    }
                }
            }
            if (!$_9839d) {
                chdir($_e3e40);
                return false;
            }
            $_991cf = realpath($_991cf);
            chdir($_e3e40);
            return $_991cf;
        }

        public static function unmeaning_file($_991cf)
        {
            $_0408d = '15d94603';
            $_991cf = rtrim($_991cf, '/\\');
            if (self::$_d6ac1 && strtolower(parse_url($_991cf, PHP_URL_SCHEME)) == 'phar') {
                $_944b1 = $_991cf = substr($_991cf, 7);
                while (!($_fe014 = self::real_include_path($_944b1)) || !Phar::isValidPharFilename($_fe014)) {
                    $_944b1 = basename($_944b1);
                    if ($_944b1 == '.' || $_944b1 == '/' || $_944b1 == '\\' || !$_944b1) return $_991cf;
                }
                $_991cf = substr($_991cf, strlen($_944b1));
                if ($_991cf == '.' || $_991cf == '/' || $_991cf == '\\' || !$_991cf) $_991cf = 'stub.php';
                $_944b1 = $_fe014;
                $_ec53b = dirname($_944b1);
                $_abe10 = pathinfo($_944b1, PATHINFO_FILENAME);
                $_4b573 = pathinfo($_944b1, PATHINFO_EXTENSION);
                $_a0cc9 = $_ec53b . DIRECTORY_SEPARATOR . 'alom.' . $_abe10 . '-' . $_0408d . '.' . $_4b573 . '.tmp';
                $_217ca = $_a0cc9 . DIRECTORY_SEPARATOR . $_991cf;
                if (!file_exists($_a0cc9)) {
                    mkdir($_a0cc9);
                } elseif (!is_dir($_a0cc9)) {
                    unlink($_a0cc9);
                    mkdir($_a0cc9);
                }
                if (!file_exists($_217ca) || filemtime($_217ca) <= filemtime($_944b1)) {
                    $_c49c7 = file_get_contents("phar://$_944b1" . DIRECTORY_SEPARATOR . $_991cf);
                    $_c49c7 = self::phpify($_c49c7);
                    $_c49c7 = self::unmeaning_code($_c49c7);
                    $_c49c7 = self::sug($_c49c7, '');
                    file_put_contents($_217ca, $_c49c7);
                }
                return $_217ca;
            } else {
                $_991cf = self::real_include_path($_991cf);
                $_ec53b = dirname($_991cf);
                $_abe10 = pathinfo($_991cf, PATHINFO_FILENAME);
                $_4b573 = pathinfo($_991cf, PATHINFO_EXTENSION);
                $_a0cc9 = $_ec53b . DIRECTORY_SEPARATOR . 'alom.' . $_abe10 . '-' . $_0408d . '.tmp.' . $_4b573;
                if (!file_exists($_a0cc9) || filemtime($_a0cc9) <= filemtime($_991cf)) {
                    $_c49c7 = file_get_contents($_991cf);
                    $_c49c7 = self::phpify($_c49c7);
                    $_c49c7 = self::unmeaning_code($_c49c7);
                    $_c49c7 = self::sug($_c49c7, '');
                    file_put_contents($_a0cc9, $_c49c7);
                }
                return $_a0cc9;
            }
        }

        public static function gcgetglobal()
        {
            return $GLOBALS;
        }

        public static function include_ike($_991cf)
        {
            $_e3e40 = getcwd();
            $_2d76f = explode(':', get_include_path());
            $_9839d = false;
            foreach ($_2d76f as $_482c9) {
                chdir(__DIR__);
                $_482c9 = realpath($_482c9);
                if ($_482c9) {
                    chdir($_482c9);
                    if (file_exists($_991cf)) {
                        $_9839d = true;
                        break;
                    }
                }
            }
            if (!$_9839d) {
                chdir($_e3e40);
                return $_991cf;
            }
            $_86500 = file_get_contents($_991cf);
            $_72cd1 = base64_encode($_86500);
            $_86500 = "eval(substr(\AlomDecoder::php_ender(\AlomDecoder::include_key_decrypt(base64_decode('$_72cd1'),\$GLOBALS['_ALOM_ike'].(\$GLOBALS['_ALOM_ike']=''))), 5, -2));";
            $_86500 = "<" . "?php file_put_contents(__FILE__,base64_decode('$_72cd1'));/* ALOM BAK FILE 941d437e1e5e7892 */ $_86500 ?" . ">";
            file_put_contents($_991cf, $_86500);
            chdir($_e3e40);
            return $_991cf;
        }

        public static function createLogMsg($_3d500, $_84748)
        {
            $_3d500 = str_replace("\n", "\n  ", $_3d500);
            $_13111 = error_reporting();
            switch ($_84748) {
                case 'success':
                case 'notice':
                    if (!($_13111 & E_USER_NOTICE)) return false;
                    break;
                case 'warning':
                    if (!($_13111 & E_USER_WARNING)) return false;
            }
            if (self::$iscli) {
                switch ($_84748) {
                    case 'error':
                        $_3d500 = "\e[31mAlom Error:   \e[0m$_3d500\n";
                        break;
                    case 'success':
                        $_3d500 = "\e[32mAlom Success: \e[0m$_3d500\n";
                        break;
                    case 'warning':
                        $_3d500 = "\e[33mAlom Warning: \e[0m$_3d500\n";
                        break;
                    case 'notice':
                        $_3d500 = "\e[36mAlom Notice:  \e[0m$_3d500\n";
                        break;
                }
            } else {
                switch ($_84748) {
                    case 'error':
                        $_3d500 = "Alom Error:   $_3d500\n";
                        break;
                    case 'success':
                        $_3d500 = "Alom Success: $_3d500\n";
                        break;
                    case 'warning':
                        $_3d500 = "Alom Warning: $_3d500\n";
                        break;
                    case 'notice':
                        $_3d500 = "Alom Notice:  $_3d500\n";
                        break;
                }
            }
            return $_3d500;
        }

        public static function log($_3d500, $_84748 = 'error')
        {
            if (self::$iscli) {
                $_3d500 = self::createLogMsg($_3d500, $_84748);
                if ($_3d500) {
                    print $_3d500;
                }
            } else {
                if (!headers_sent()) {
                    header("Content-type: text/plain");
                }
                $_3d500 = self::createLogMsg($_3d500, $_84748);
                if ($_3d500) {
                    error_log($_3d500);
                    print $_3d500;
                }
            }
            if ($_84748 == 'error') {
                while (1) die;
            }
        }

        private static function singlequote($_fb451)
        {
            return str_replace(array('\\', "'"), array('\\\\', "\\'"), $_fb451);
        }

        public static function invalidCode()
        {
            self::log("Invalid obfuscated code by ALOM! Please don't touch the code.", 'error');
            die;
        }

        public static function notRTW()
        {
            self::log("The obfuscated code by ALOM, is not ready to start.", 'error');
            die;
        }

        public static function hasExpired()
        {
            self::log("The obfuscated code by ALOM, expired.", 'error');
            die;
        }

        public static function invalidSys()
        {
            self::log("Your system is not allowed to use this obfuscated code by ALOM.", 'error');
            die;
        }

        public static function invalidName()
        {
            self::log("Your system name is restricted to use this obfuscated code by ALOM.", 'error');
            die;
        }

        public static function invalidForceFiles()
        {
            self::log("Invalid or dont exists force files used in obfuscatored code by ALOM.", 'error');
            die;
        }

        public static function invalidQBC()
        {
            self::log("Invalid obfuscatored code by ALOM! Please don't touch the code. invalid QBC code.", 'error');
            die;
        }

        public static function removedLoader($_b9b4f)
        {
            self::log("The loader file '$_b9b4f' do not exists for complete obfuscatoring process!", 'error');
            die;
        }

        public static function evalDisable()
        {
            self::log("The eval function is disabled. Enable that for processing script.", 'error');
            die;
        }

        public static function debuggerDetected($_96304)
        {
            self::log("You can not use debugger while using obfuscatored code. Please disable '$_96304'.", 'error');
            die;
        }

        public static function starvationDetected()
        {
            self::log("The phenomenon of process starvation has occurred. The program was stopped by Alom.", 'error');
            die;
        }

        public static function hookingDetected()
        {
            if (microtime(true) - self::$_89d28 <= 3.02) {
                self::$_c3392 = array(0x67452301, 0xefcdab89);
                self::$_ab0da = self::$_c3a8f = array();
                return self::run(self::$_bec53);
            }
            self::log("The hooking method was identified. Please run the script normally.", 'error');
            die;
        }

        public static function invalidLicenseCode()
        {
            self::log("Invalid license code. Please get a license code from the script manufacturer.", 'error');
            die;
        }

        public static function notRTWLicenseCode()
        {
            self::log("The obfuscated code by ALOM, is not ready to start.", 'error');
            die;
        }

        public static function hasExpiredLicenseCode()
        {
            self::log("The obfuscated code by ALOM, expired.", 'error');
            die;
        }

        public static function lvsDoNotResponsed()
        {
            self::log("The license verifier API do not responesd. Please call to author of script.", 'error');
            die;
        }

        public static function run($code)
        {
            self::$iscli = defined("STDIN") || PHP_SAPI === "cli" || (empty($_SERVER['REMOTE_ADDR']) and !isset($_SERVER['HTTP_USER_AGENT']) and count($_SERVER['argv']) > 0);
            if (!self::$_89d28) {
                self::$_89d28 = microtime(true);
                self::$_bec53 = $code;
            }
            if (strpos($code, '$') === false) {
                $_7886f = strlen($code);
                $code = explode(':', $code, 2);
                if (!isset($code[1])) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidCode();
                    while (1) die;
                }
                $_71a37 = true;
                $_58ef2 = (int)$code[0] + $_7886f;
                $_7886f = (int)$code[1];
                $_f46f5 = preg_replace("/\([0-9]+\) : eval\(\)'d code/i", '', __FILE__);
                $_f46f5 = @file_get_contents($_f46f5);
                $code = substr($_f46f5, $_58ef2, $_7886f);
            } else $_71a37 = false;
            if (strpos($code, "A\x6co\x4d$") !== 0) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::invalidCode();
                while (1) die;
            }
            $_b4dd0 = explode('$', $code, 3);
            $_35320 = crc32("\x61\x4cO\x6d$" . $code[0]) ^ 0xA1011;
            $_a5d2c = explode(':', $_b4dd0[1], 2);
            $_a876e = hexdec($_a5d2c[0]) ^ 0x7f983369;
            $_a5d2c = isset($_a5d2c[1]) ? $_a5d2c[1] : false;
            $_81eea = 5;
            if ($_a5d2c) {
                if (substr(md5($code), 0, $_81eea) != str_repeat('f', $_81eea)) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidQBC();
                    while (1) die;
                }
            }
            $code = $_b4dd0[2];
            unset($_b4dd0);
            self::mt_prng_store($_a876e ^ 0x51);
            $_d7f19 = $code[0];
            $code = substr($code, 1);
            if ($_d7f19 == '2') $code = hex2bin($code); elseif ($_d7f19 == '0') $code = alom_bin_decode($code);
            elseif ($_d7f19 == '1') $code = self::base64decode($code);
            elseif ($_d7f19 == '3') $code = base64_decode($code);
            $_9c7d9 = unpack('V2', substr($code, 0, 8));
            $code = substr($code, 8);
            $_8ee6a = $_9c7d9[1] ^ 0x509a2f33;
            $_f47cc = $_9c7d9[2] ^ 0xDEADC0DE;
            if (crc32($code) != $_f47cc) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::invalidCode();
                while (1) die;
            }
            self::mt_prng_store($_a876e ^ ALOM_VERSION_NUMBER ^ 0x74);
            $code = array_values(unpack('V*', $code));
            for ($_7a91f = 0; isset($code[$_7a91f]); ++$_7a91f) $code[$_7a91f] ^= rand();
            array_unshift($code, 'V*');
            $code = call_user_func_array('pack', $code);
            $code = rtrim($code, "\x85");
            if (substr($code, -1, 1) != "\x43") {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::invalidCode();
                while (1) die;
            }
            $code = substr($code, 0, -1);
            $_e30b7 = unpack('V6', substr($code, 0, 24));
            $code = substr($code, 24);
            $_06198 = $_e30b7[1];
            self::$_c3392[0] ^= $_e30b7[3];
            self::$_c3392[1] ^= $_e30b7[2];
            $_4d8c7 = $_e30b7[4] ^ 0x309a2f35;
            $_db80b = $_e30b7[5] ^ 0x45ff39ae;
            $_3e6d4 = $_e30b7[6] ^ 0x01192bca;
            $_67044 = [];
            $_0408d = ord(substr($code, 0, 1)) ^ 0x9e;
            $_67044['7d91c461'] = $_0408d & 0x1;
            $_67044['fb051c96'] = $_0408d & 0x2;
            $_67044['7757dccd'] = $_0408d & 0x4;
            $_67044['779c09c3'] = $_0408d & 0x8;
            $_67044['19214d76'] = $_0408d & 0x10;
            $_67044['3926ce56'] = $_0408d & 0x20;
            $_67044['f96ac526'] = $_0408d & 0x40;
            $_67044['4fcffefe'] = $_0408d & 0x80;
            $_0408d = ord(substr($code, 1, 1)) ^ 0xb5;
            $_67044['1ea27799'] = $_0408d & 0x1;
            $_67044['bf58f0db'] = $_0408d & 0x2;
            $_67044['9f18c242'] = $_0408d & 0x4;
            $_67044['35940b1d'] = $_0408d & 0x8;
            $_67044['bea3c68d'] = $_0408d & 0x10;
            $_67044['b93558b2'] = $_0408d & 0x20;
            $_67044['9a06fcb6'] = $_0408d & 0x80;
            $_0408d = ord(substr($code, 2, 1)) ^ 0x39;
            $_67044['628b1fd0'] = $_0408d & 0x1;
            $code = substr($code, 3);
            self::$_ab0da[0] = substr($code, 0, 16);
            self::$_ab0da[1] = substr($code, 16, 16);
            $code = substr($code, 32);
            $_c5222 = substr($code, 0, 16);
            $_1dc4c = substr(md5("alom:$_c5222"), 0, 12);
            $_f46f5 = constant('ALOM' . $_1dc4c . '_OUTER_FILE');
            if ($_f46f5 != preg_replace("/\([0-9]+\) : eval\(\)'d code/i", '', __FILE__)) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::invalidCode();
                while (1) die;
            }
            $_f46f5 = file_get_contents($_f46f5);
            $code = substr($code, 16);
            if ($_67044['bea3c68d'] && $_67044['b93558b2']) {
                $_4385a = debug_backtrace();
                array_shift($_4385a);
                for ($_7a91f = 0; isset($_4385a[$_7a91f]); ++$_7a91f) if (isset($_4385a[$_7a91f]['args'])) unset($_4385a[$_7a91f]['args']);
            }
            if ($_67044['7757dccd']) self::$_c3392[0] ^= 0xfe062ff5;
            if ($_67044['779c09c3']) self::$_c3392[1] ^= 0x0eb5bb9f;
            if ($_67044['628b1fd0']) self::$_c3392[0] ^= 0x4752915f;
            if ($_67044['bea3c68d']) self::$_c3392[1] ^= 0xf396ee52;
            if ($_67044['7757dccd']) {
                if (function_exists('xdebug_get_code_coverage') || function_exists('xdebug_get_collected_errors') || function_exists('xdebug_get_monitored_functions')) {
                    self::debuggerDetected('XDebug');
                    while (1) die;
                }
                if (extension_loaded('xdebug')) {
                    try {
                        if (function_exists('xdebug_disable')) {
                            xdebug_disable();
                        }
                    } catch (Error|Exception $_7d2cf) {
                    }
                    $_f652f = ini_get('xdebug.remote_enable');
                    $_bc54d = ini_get('xdebug.start_with_request');
                    $_7120f = ini_get('xdebug.mode');
                    if ($_f652f == '1' || $_f652f == 'on' || $_bc54d == 'yes' || ($_bc54d == 'default' && strpos($_7120f, 'profile') !== false)) {
                        unset($code);
                        $code = str_repeat('Alom Obfuscator!', 16);
                        self::debuggerDetected('XDebug');
                        while (1) die;
                    }
                }
                if (extension_loaded('ZendDebugger')) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::debuggerDetected('ZendDebugger');
                    while (1) die;
                }
                if (extension_loaded('evalhook')) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::debuggerDetected('evalhook');
                    while (1) die;
                }
                if (extension_loaded('uopz') && !ini_get('uopz.disable') && !ini_get('uopz.exit')) {
                    if (function_exists('uopz_allow_exit')) {
                        uopz_allow_exit(true);
                    }
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::debuggerDetected('uopz');
                    while (1) die;
                }
            }
            if ($_67044['779c09c3']) {
                $_e9a9c = pack('N', crc32(json_encode($GLOBALS)));
                $_50286 = get_defined_constants(true);
                $_e9a9c .= pack('N', crc32(json_encode($_50286['user'])));
                unset($_50286);
                if ($_67044['628b1fd0']) {
                    $_98775 = array();
                    $_5a7d9 = get_declared_classes();
                    foreach ($_5a7d9 as $_1fd10) {
                        $_98775[$_1fd10] = array(array(), array());
                        $_bef48 = new ReflectionClass($_1fd10);
                        $_f7ec9 = $_bef48->getProperties(ReflectionProperty::IS_STATIC);
                        foreach ($_f7ec9 as $_0405a) {
                            $_0405a->setAccessible(true);
                            $_98775[$_1fd10][0][$_0405a->getName()] = $_0405a->getValue();
                        }
                        $_ddcaf = $_bef48->getMethods();
                        foreach ($_ddcaf as $_f1a83) $_98775[$_1fd10][1][$_f1a83->getName()] = $_f1a83->getStaticVariables();
                    }
                    unset($_5a7d9);
                    $_e9a9c .= pack('N', crc32(json_encode($_98775)));
                    unset($_98775);
                    $_512a2 = array();
                    $_892ed = get_defined_functions();
                    $_892ed = $_892ed['user'];
                    foreach ($_892ed as $_2a48e) {
                        $_8bcf0 = new ReflectionFunction($_2a48e);
                        $_512a2[$_2a48e] = $_8bcf0->getStaticVariables();
                    }
                    unset($_892ed);
                    $_e9a9c .= pack('N', crc32(json_encode($_512a2)));
                    unset($_512a2);
                }
                ob_start();
                $_29247 = fopen("php://memory", 'r');
                var_dump($_29247);
                fclose($_29247);
                $_7ba85 = ob_get_contents();
                ob_end_clean();
                $_7ba85 = explode(')', $_7ba85, 2);
                $_7ba85 = (int)substr($_7ba85[0], 9);
                $_45d3e = 'a8983qr_D8u' . bin2hex($_c5222);
                $_d0074 = microtime(true);
                $_74bf5 = $_1dc4c . gzinflate(base64_decode('MzNPTfPS1XLMyc/VT8lXyMsvUcjIz8/OzEtX0I3X1QcA')) . $_1dc4c;
                $_36125 = eval("\$" . $_45d3e . "='1B-';return '$_74bf5'.\$" . $_45d3e . ";");
                $_d0074 = microtime(true) - $_d0074;
                if ($_36125 != $_74bf5 . "1B-" || $_d0074 > 0.07) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::starvationDetected();
                    while (1) die;
                }
                $_80262 = pack('N', crc32(json_encode($GLOBALS)));
                $_50286 = get_defined_constants(true);
                $_80262 .= pack('N', crc32(json_encode($_50286['user'])));
                unset($_50286);
                if ($_67044['628b1fd0']) {
                    $_98775 = array();
                    $_5a7d9 = get_declared_classes();
                    foreach ($_5a7d9 as $_1fd10) {
                        $_98775[$_1fd10] = array(array(), array());
                        $_bef48 = new ReflectionClass($_1fd10);
                        $_f7ec9 = $_bef48->getProperties(ReflectionProperty::IS_STATIC);
                        foreach ($_f7ec9 as $_0405a) {
                            $_0405a->setAccessible(true);
                            $_98775[$_1fd10][0][$_0405a->getName()] = $_0405a->getValue();
                        }
                        $_ddcaf = $_bef48->getMethods();
                        foreach ($_ddcaf as $_f1a83) $_98775[$_1fd10][1][$_f1a83->getName()] = $_f1a83->getStaticVariables();
                    }
                    unset($_5a7d9);
                    $_80262 .= pack('N', crc32(json_encode($_98775)));
                    unset($_98775);
                    $_512a2 = array();
                    $_892ed = get_defined_functions();
                    $_892ed = $_892ed['user'];
                    foreach ($_892ed as $_2a48e) {
                        $_8bcf0 = new ReflectionFunction($_2a48e);
                        $_512a2[$_2a48e] = $_8bcf0->getStaticVariables();
                    }
                    unset($_892ed);
                    $_80262 .= pack('N', crc32(json_encode($_512a2)));
                    unset($_512a2);
                }
                ob_start();
                $_29247 = fopen("php://memory", 'r');
                var_dump($_29247);
                fclose($_29247);
                $_f00a0 = ob_get_contents();
                ob_end_clean();
                $_f00a0 = explode(')', $_f00a0, 2);
                $_f00a0 = (int)substr($_f00a0[0], 9);
                if ($_e9a9c != $_80262) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    $_4cb55 = self::hookingDetected();
                    if ($_4cb55) return $_4cb55;
                    while (1) die;
                }
                if ($_f00a0 - $_7ba85 != 1) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    $_4cb55 = self::hookingDetected();
                    if ($_4cb55) return $_4cb55;
                    while (1) die;
                }
                $_39b3d = abs(microtime(true) - time()) > 1.1;
                $_82bbd = true;
                while (1) {
                    $_82bbd = false;
                    break;
                }
                if ($_39b3d || $_82bbd) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidCode();
                    exit;
                    die;
                    for (; 1;) die;
                    while (1) die;
                    sleep(1e9);
                    usleep(1e9);
                    a87uijk:
                    goto a87uijk;
                    return;
                    throw Exception;
                }
                while (microtime(true) + ((int)usleep(0)) == microtime(true)) ;
            }
            $_81673 = $_67044['628b1fd0'] && strpos(ini_get("disable_functions"), "proc_open") === false;
            if ($_81673) {
                $_eb279 = getenv('_');
                if (!$_eb279) $_eb279 = "/usr/bin/php";
                $_74623 = get_defined_functions();
                $_d3af5 = get_declared_classes();
                $_dce73 = '<?php ';
                foreach ($_74623['user'] as $_11365) $_dce73 .= "function " . $_11365 . "(){print 1;}";
                $_dce73 .= "eval(';');microtime(true);microtime();time();die; ?>";
                $_d65ab = array(array("pipe", "r"), array("pipe", "w"));
                $_b158b = proc_open($_eb279, $_d65ab, $_7892c);
                fwrite($_7892c[0], $_dce73);
                fclose($_7892c[0]);
                unset($_dce73);
            }
            $_6f687 = "\x23\x20\x41\x4c\x4f\x4d\x20\x41\x4e\x54\x49\x54\x41\x4d\x50\x45\x52\x20\x53\x45\x47\x4d\x45\x4e\x54\x20\x53\x45\x50\x41\x52\x41\x54\x4f\x52\x20\x64\x34\x37\x33\x62\x36\x30\x36\x61\x39";
            $_dbc8b = "\x23\x20\x41\x4c\x4f\x4d\x20\x4f\x50\x54\x49\x4f\x4e\x41\x4c\x20\x53\x45\x47\x4d\x45\x4e\x54\x20\x53\x45\x50\x41\x52\x41\x54\x4f\x52\x20\x64\x34\x37\x33\x62\x36\x30\x36\x61\x39";
            $_6f687 = $_6f687 . bin2hex($_c5222) . "\x20\x23\x0a";
            $_108da = strpos($_f46f5, $_6f687);
            if (!$_71a37 || $_108da !== false) {
                if ($_108da === false) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidCode();
                    while (1) die;
                }
                if ($_67044['4fcffefe']) {
                    $_dbc8b = $_dbc8b . bin2hex($_c5222) . "\x20\x23\x0a";
                    $_e43d4 = strpos($_f46f5, $_dbc8b);
                    if ($_e43d4 === false) {
                        unset($code);
                        $code = str_repeat('Alom Obfuscator!', 16);
                        self::invalidCode();
                        while (1) die;
                    }
                    $_9136a = $_e43d4 - $_db80b;
                } else {
                    $_9136a = $_108da - $_db80b;
                }
            } else {
                $_9136a = 0;
            }
            $_11679 = substr($_f46f5, $_9136a, $_db80b);
            self::$_ab0da[0] = self::$_ab0da[0] ^ md5($_c5222 . self::license_insert_code($_11679), true);
            self::$_ab0da[1] = self::$_ab0da[1] ^ md5($_c5222 . substr($_f46f5, $_108da, $_3e6d4), true);
            self::mt_prng_store($_a876e ^ 0x90c8);
            self::decodew(true, 0, 0);
            self::mt_prng_store($_a876e ^ 0xde);
            $_61dbb = unpack('V2', substr($code, 0, 8));
            $code = substr($code, 8);
            $_a6f57 = time();
            $_61dbb = ["ready" => $_61dbb[1] ^ 0xf09132b8, "expiration" => $_61dbb[2] ^ 0x5627c1f0];
            if ($_61dbb["ready"] > $_a6f57) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::notRTW();
                while (1) die;
            }
            if ($_61dbb["expiration"] <= $_a6f57) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::hasExpired();
                while (1) die;
            }
            self::$_c3392[0] ^= $_61dbb["ready"];
            self::$_c3392[1] ^= $_61dbb["expiration"];
            if ($_67044['bf58f0db']) {
                $_08046 = unpack('N', substr($code, 0, 4));
                $_6cd54 = substr($code, 4, $_08046[1] ^ 0x5598aa1e);
                $code = substr($code, strlen($_6cd54) + 4);
            }
            if ($_67044['1ea27799']) {
                $_08046 = unpack('N', substr($code, 0, 4));
                $_ae5ea = substr($code, 4, $_08046[1] ^ 0x7702235f);
                $code = substr($code, strlen($_ae5ea) + 4);
            }
            if ($_67044['f96ac526']) {
                $_a68f9 = substr($code, 0, 32);
                $code = substr($code, 32);
            }
            $_976e3 = ['system' => ['id' => $_c5222], 'info' => [], 'id' => 'W]'];
            $_320b6 = unpack('V', substr($code, 0, 4));
            $code = substr($code, 4);
            $_320b6 = $_320b6[1] ^ 0x405a0ff1;
            $_5a0d9 = 0;
            for ($_7a91f = 0; $_7a91f < $_320b6; ++$_7a91f) {
                $_919e8 = unpack('V', substr($code, $_5a0d9, 4));
                $_919e8 = $_919e8[1] ^ 0x671feb84;
                $_5a0d9 += 4;
                $_6cb89 = substr($code, $_5a0d9, $_919e8);
                $_5a0d9 += $_919e8;
                $_6eca2 = substr($code, $_5a0d9, 16);
                $_5a0d9 += 16;
                $_dfae5 = self::fget($_6cb89, __DIR__);
                if (!$_dfae5) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidForceFiles();
                    while (1) die;
                }
                $_8c3f4 = md5(basename($_6cb89) . "\n" . @file_get_contents($_dfae5), true);
                $_976e3['id'] .= $_8c3f4 . "\n";
                $_51849 = md5($_c5222 . $_8c3f4, true);
                if ($_6eca2 != $_51849) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidForceFiles();
                    while (1) die;
                }
            }
            $_976e3['id'] .= $_320b6 . "/+\xf1%R\r";
            $code = substr($code, $_5a0d9);
            $_976e3['system']['ord'] = substr($code, 0, 1);
            $_976e3['system']['chr'] = ord($_976e3['system']['ord']) ^ 0xe3;
            $_976e3['test'] = substr($code, 1, 16);
            $code = substr($code, 17);
            if ($_976e3['system']['chr'] & 0x1) {
                $_976e3['info']['uname'] = md5(php_uname(), true);
                $_976e3['system']['id'] .= "un:" . $_976e3['info']['uname'] . "\n";
            }
            if ($_976e3['system']['chr'] & 0x2) {
                $_976e3['info']['username'] = md5(get_current_user(), true);
                $_976e3['system']['id'] .= "us:" . $_976e3['info']['username'] . "\n";
            }
            if ($_976e3['system']['chr'] & 0x4) {
                $_976e3['system']['id'] .= "fn:" . md5(basename(preg_replace("/\([0-9]+\) : eval\(\)'d code/i", '', __FILE__)), true) . "\n";
            }
            if ($_976e3['system']['chr'] & 0x8) {
                $_0ddcf = getenv('SERVER_ADDR');
                if (!$_0ddcf) {
                    $_0ddcf = getenv('SSH_CONNECTION');
                    if ($_0ddcf) {
                        $_0ddcf = explode(' ', $_0ddcf, 4);
                        $_0ddcf = $_0ddcf[2];
                    }
                }
                $_976e3['info']['ipaddr'] = md5($_0ddcf, true);
                $_976e3['system']['id'] .= "ip:" . $_976e3['info']['ipaddr'] . "\n";
            }
            if ($_976e3['system']['chr'] & 0x10) {
                $_d1e47 = getenv('SERVER_NAME');
                if (!$_d1e47) $_d1e47 = getenv('HTTP_HOST');
                $_976e3['info']['hostname'] = md5($_d1e47, true);
                $_976e3['system']['id'] .= "hn:" . $_976e3['info']['hostname'] . "\n";
            }
            $_976e3['id'] .= $_976e3['system']['id'] . "..\xaf\0S!\r" . ($_976e3['system']['chr'] ^ 0xe3);
            $_976e3['id'] = md5($_976e3['id'], true);
            $_976e3['system']['id'] = md5($_976e3['system']['id'] . $_976e3['system']['ord'], true);
            if ($_976e3['test'] != md5($_c5222 . $_976e3['id'], true)) {
                unset($code);
                $code = str_repeat('Alom Obfuscator!', 16);
                self::invalidSys();
                while (1) die;
            }
            self::$_c3392[0] ^= crc32(substr($_976e3['system']['id'], 0, 8));
            self::$_c3392[1] ^= crc32(substr($_976e3['system']['id'], 8, 8));
            self::$_c3392[0] ^= crc32(substr(__FILE__, -17));
            self::$_ab0da[0] = self::$_ab0da[0] ^ $_976e3['id'];
            self::$_ab0da[1] = self::$_ab0da[1] ^ $_976e3['id'];
            $_46524 = rand();
            $_91901 = rand();
            $_6cd5d = rand();
            $_0e23a = rand();
            self::$_c3392[0] ^= $_35320 ^ 2;
            $_93a6d = rand();
            $_f9268 = rand();
            $_39ef2 = pack('V', $_93a6d);
            $_676c2 = pack('V', $_f9268);
            self::$_c3392[0] = self::$_c3392[0] ^ $_6cd5d ^ $_93a6d;
            self::$_c3392[1] = self::$_c3392[1] ^ $_46524 ^ $_f9268;
            self::$_c3392[0] = crc32($_676c2 . pack('V', self::$_c3392[0])) ^ $_0e23a ^ $_f9268;
            self::$_c3392[1] = crc32($_39ef2 . pack('V', self::$_c3392[1])) ^ $_91901 ^ $_93a6d;
            self::$_c3392[1] ^= $_35320;
            $_06198 ^= self::$_c3392[0] ^ self::$_c3392[1];
            if ($_67044['f96ac526']) {
                if ($_67044['bf58f0db']) {
                    $_11679 = @file_get_contents($_6cd54);
                }
                $_a97ab = self::license_find_code($_11679);
                if (!$_a97ab) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidLicenseCode();
                    while (1) die;
                }
                $_a97ab = str_replace([' ', "\n", "\r", "\t", '-', '[', ']', '*'], '', strtolower($_a97ab));
                if (strlen($_a97ab) != 96) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidLicenseCode();
                    while (1) die;
                }
                $_a97ab = self::license_code_decrypt($_a97ab, $_a68f9);
                if (!$_a97ab) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidLicenseCode();
                    while (1) die;
                }
                $_0408d = ord($_a97ab['systemhash'][0]) ^ 0x5;
                $_b1f79 = array();
                if ($_0408d & 0x1) {
                    if (!isset($_976e3['info']['uname'])) $_976e3['info']['uname'] = md5(php_uname(), true);
                    $_b1f79['uname'] = $_976e3['info']['uname'];
                }
                if ($_0408d & 0x2) {
                    if (!isset($_976e3['info']['username'])) $_976e3['info']['username'] = md5(get_current_user(), true);
                    $_b1f79['username'] = $_976e3['info']['username'];
                }
                if ($_0408d & 0x4) {
                    if (!isset($_976e3['info']['ipaddr'])) {
                        $_0ddcf = getenv('SERVER_ADDR');
                        if (!$_0ddcf) {
                            $_0ddcf = getenv('SSH_CONNECTION');
                            if ($_0ddcf) {
                                $_0ddcf = explode(' ', $_0ddcf, 4);
                                $_0ddcf = $_0ddcf[2];
                            }
                        }
                        $_976e3['info']['ipaddr'] = md5($_0ddcf, true);
                    }
                    $_b1f79['ipaddr'] = $_976e3['info']['ipaddr'];
                }
                if ($_0408d & 0x8) {
                    if (!isset($_976e3['info']['hostname'])) {
                        $_d1e47 = getenv('SERVER_NAME');
                        if (!$_d1e47) $_d1e47 = getenv('HTTP_HOST');
                        $_976e3['info']['hostname'] = md5($_d1e47, true);
                    }
                    $_b1f79['hostname'] = $_976e3['info']['hostname'];
                }
                $_086a9 = self::license_systemhash_generate($_b1f79);
                if (substr($_a97ab['systemhash'], 2) != substr($_086a9, 2)) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidLicenseCode();
                    while (1) die;
                }
                if ($_a97ab["ready"] > $_a6f57) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::notRTWLicenseCode();
                    while (1) die;
                }
                if ($_a97ab["expiration"] <= $_a6f57) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::hasExpiredLicenseCode();
                    while (1) die;
                }
                if ($_67044['1ea27799']) {
                    $_a97ab = '[' . substr($_a97ab, 0, 48) . '-' . substr($_a97ab, 48, 32) . '-' . substr($_a97ab, 80, 16) . ']';
                    $_ae5ea = str_replace('%code%', md5($_a97ab), $_ae5ea);
                    $_91569 = @file_get_contents($_ae5ea);
                    if (!$_91569) {
                        unset($code);
                        $code = str_repeat('Alom Obfuscator!', 16);
                        self::lvsDoNotResponsed();
                        while (1) die;
                    }
                    $_91569 = explode('/', $_91569, 2);
                    if (isset($_91569[1])) {
                        self::log($_91569[1], 'warning');
                    }
                    $_91569 = strtolower($_91569[0]);
                    if ($_91569 == '0' || $_91569 == 'false' || $_91569 == 'off') {
                        unset($code);
                        $code = str_repeat('Alom Obfuscator!', 16);
                        self::invalidLicenseCode();
                        while (1) die;
                    } elseif ($_91569 != '1' && $_91569 != 'true' && $_91569 != 'on') {
                        unset($code);
                        $code = str_repeat('Alom Obfuscator!', 16);
                        self::lvsDoNotResponsed();
                        while (1) die;
                    }
                }
            }
            if ($_67044['9a06fcb6']) {
                $_acc67 = ord($code[0]);
                self::$_9ad21['salt'] = substr($code, 1, $_acc67);
                $code = substr($code, $_acc67 + 1);
                $_751db = ord($code[0]);
                self::$_9ad21['prefix'] = substr($code, 1, $_751db);
                self::$_9ad21['size'] = ord($code[$_751db + 1]);
                self::$_9ad21['variables'] = $code[$_751db + 2] == "\x53";
                self::$_9ad21['deep'] = $code[$_751db + 3] == "\x9f";
                self::$_9ad21['free'] = array();
                $code = substr($code, $_751db + 4);
                while (1) {
                    $_59cfe = unpack('N', substr($code, 0, 4));
                    if ($_59cfe[1] == 0) {
                        $code = substr($code, 4);
                        break;
                    }
                    self::$_9ad21['free'][] = substr($code, 4, $_59cfe[1]);
                    $code = substr($code, $_59cfe[1] + 4);
                }
            }
            for ($_7a91f = 0; $_7a91f < $_4d8c7; ++$_7a91f) {
                if (!isset($code[$_06198 + 4])) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidCode();
                    while (1) die;
                }
                $_e547c = rand();
                self::$_c3392[0] = (int)(self::$_c3392[0] + 0x32123 + ($_e547c >> 4)) & 0xffffffff;
                self::$_c3392[1] = (int)(self::$_c3392[1] + 0x12321 + ($_e547c >> 4)) & 0xffffffff;
                $_b003c = unpack('V', substr($code, $_06198, 4));
                $code = substr($code, 0, $_06198) . substr($code, $_06198 + 4);
                $_06198 = $_b003c[1] ^ self::$_c3392[0] ^ self::$_c3392[1];
                $_d0fb1 = $_67044['779c09c3'] ? $_e547c % 0b111 : $_e547c % 0b110;
                switch ($_d0fb1) {
                    case 0b000:
                        self::$_c3392[0] ^= rand() ^ rand() ^ rand() ^ rand();
                        self::$_c3392[1] ^= rand() ^ rand() ^ rand() ^ rand();
                        $code[$_06198] = chr(ord($code[$_06198]) ^ ((self::$_c3392[0] ^ self::$_c3392[1]) & 0xff));
                        break;
                    case 0b001:
                        if (!isset($code[$_06198 + 4])) {
                            unset($code);
                            $code = str_repeat('Alom Obfuscator!', 16);
                            self::invalidCode();
                            while (1) die;
                        }
                        $_f47cc = crc32($code) ^ rand();
                        $_50fd3 = unpack('V', substr($code, $_06198 + 4, 4));
                        $code = substr($code, 0, $_06198) . substr($code, $_06198 + 8);
                        self::$_c3392[0] ^= $_f47cc ^ rand() ^ rand() ^ rand() ^ rand();
                        self::$_c3392[1] ^= $_f47cc ^ rand() ^ rand() ^ rand() ^ $_50fd3[1];
                        break;
                    case 0b010:
                        $_f47cc = crc32(pack('V', rand()) . self::$_ab0da[0]);
                        $_f47cc ^= crc32(pack('V', rand()) . self::$_ab0da[1]);
                        self::$_c3392[0] ^= $_f47cc ^ rand() ^ rand() ^ rand();
                        self::$_c3392[1] ^= $_f47cc ^ rand() ^ rand() ^ rand();
                        break;
                    case 0b011:
                        if (!isset($code[$_06198 + 8])) {
                            unset($code);
                            $code = str_repeat('Alom Obfuscator!', 16);
                            self::invalidCode();
                            while (1) die;
                        }
                        $_8abd7 = unpack('V2', substr($code, $_06198, 8));
                        $code = substr($code, 0, $_06198) . substr($code, $_06198 + 8);
                        $_93a6d = $_8abd7[1];
                        $_f9268 = $_8abd7[2];
                        self::$_c3392[0] ^= rand() ^ rand() ^ rand() ^ rand() ^ $_93a6d;
                        self::$_c3392[1] ^= rand() ^ rand() ^ rand() ^ rand() ^ $_f9268 ^ 1;
                        break;
                    case 0b100:
                        $_a408d = strlen($code) - 1;
                        $_037d8 = ceil($_67044['7d91c461'] ? pow($_a408d, 1 / 4) : pow($_a408d, 1 / 3));
                        $_a408d -= $_037d8;
                        $_b003c = rand() % $_a408d;
                        $_7886f = (rand() ^ rand()) % $_037d8 + 1;
                        $_93a6d = self::$_c3392[1] ^ rand();
                        $_f9268 = self::$_c3392[0] ^ rand();
                        $_17f79 = rand();
                        $_d4216 = $_7886f > $_a408d / 2;
                        if ($_d4216) $_7886f = $_17f79 % $_7886f + 1;
                        $code = substr($code, 0, $_b003c) . self::decodew(substr($code, $_b003c, $_7886f), $_93a6d, $_f9268) . substr($code, $_b003c + $_7886f);
                        if (!$_d4216) $_f9268 ^= $_17f79;
                        self::$_c3392[0] = $_93a6d ^ rand();
                        self::$_c3392[1] = $_f9268 ^ rand();
                        break;
                    case 0b101:
                        $_a408d = strlen($code) - 5;
                        $_037d8 = ceil($_67044['7d91c461'] ? pow($_a408d, 1 / 4) : pow($_a408d, 1 / 3));
                        $_a408d -= $_037d8;
                        $_b003c = rand() % $_a408d;
                        $_7886f = (rand() ^ rand()) % $_037d8 + 1;
                        $_93a6d = self::$_c3392[1] ^ rand();
                        $_f9268 = self::$_c3392[0] ^ rand();
                        $_17f79 = rand();
                        $_d4216 = $_7886f > $_a408d / 2;
                        if ($_d4216) $_7886f = $_17f79 % $_7886f + 1;
                        $code = substr($code, 0, $_b003c) . self::decw(substr($code, $_b003c, $_7886f + 4), $_93a6d, $_f9268) . substr($code, $_b003c + $_7886f + 4);
                        if (!$_d4216) $_f9268 ^= $_17f79;
                        self::$_c3392[0] = $_93a6d ^ rand();
                        self::$_c3392[1] = $_f9268 ^ rand();
                        break;
                    case 0b110:
                        $_7886f = unpack('V', substr($code, $_06198, 4))[1];
                        $_01f87 = substr($code, $_06198 + 4, $_7886f);
                        $code = substr($code, 0, $_06198) . substr($code, $_06198 + $_7886f + 4);
                        $_01f87 = gzinflate($_01f87);
                        if ($code === false) {
                            unset($code);
                            $code = str_repeat('Alom Obfuscator!', 16);
                            self::invalidCode();
                            while (1) die;
                        }
                        $_f47cc = crc32("alom:$_01f87:alom");
                        $_e01b7 = str_replace("g1ql_r2vqxr5edmty", bin2hex(random_bytes(3)), $_01f87);
                        $_19135 = eval($_e01b7);
                        self::$_ab0da[0] = self::$_ab0da[0] ^ md5($_c5222 . self::license_insert_code(substr($_f46f5, $_9136a, $_db80b)) . $_01f87, true);
                        self::$_ab0da[1] = self::$_ab0da[1] ^ md5($_c5222 . substr($_f46f5, $_108da, $_3e6d4) . $_01f87, true);
                        self::$_c3392[0] ^= rand() ^ rand() ^ rand() ^ rand() ^ $_f47cc;
                        self::$_c3392[1] ^= rand() ^ rand() ^ rand() ^ rand() ^ $_19135;
                        break;
                }
            }
            if ($_67044['19214d76']) {
                self::mt_prng_store($_a876e ^ 0x1c);
                $code = self::base64decode("$code" . ($code = ''));
            }
            if ($_81673) {
                $_8daf4 = fgetc($_7892c[1]);
                fclose($_7892c[1]);
                proc_close($_b158b);
                unset($_7892c);
                unset($_b158b);
                if ($_8daf4) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    $_4cb55 = self::hookingDetected();
                    if ($_4cb55) return $_4cb55;
                    while (1) die;
                }
            }
            self::mt_prng_store($_a876e ^ 0x8550257);
            $code = self::dec("$code" . ($code = ''), rand() ^ self::$_c3392[0], rand() ^ self::$_c3392[1]);
            self::mt_prng_reset();
            $_7886f = unpack('N', substr($code, 0, 4));
            $_7872a = substr($code, 4, $_7886f[1]);
            $code = substr($code, $_7886f[1] + 4);
            if ($_67044['3926ce56']) {
                $code = ("\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65")("$code" . ($code = ''));
                if ($code === false) {
                    unset($code);
                    $code = str_repeat('Alom Obfuscator!', 16);
                    self::invalidCode();
                    while (1) die;
                }
            }
            $code = $code ^ str_repeat("\x80", strlen($code));
            if ($_67044['9f18c242']) {
                $_7886f = unpack('N', substr($code, 0, 4));
                $_9943d = substr($code, 4, $_7886f[1]);
                $code = substr($code, $_7886f[1] + 4);
                if (!class_exists("AlomEncoderShutdown")) {
                    eval('class AlomEncoderShutdown{private $shutdown;' . 'public function __construct($code){$this->shutdown=$code;}' . 'public function __destruct(){if($this->shutdown){' . '$shutdown = "unset(\$_ALOM_CODE);".$this->shutdown;' . '(function($_ALOM_CODE){@eval($_ALOM_CODE);})($shutdown);' . '}}}');
                }
                if (class_exists("AlomEncoderShutdown")) {
                    self::$_9943d = new AlomEncoderShutdown($_9943d);
                }
            }
            $_c3a8f = array(crc32(self::$_ab0da[0]) ^ self::$_c3392[0], crc32(self::$_ab0da[1]) ^ self::$_c3392[1]);
            $_c3a8f[2] = md5($_c3a8f[0] . $_c5222 . $_c3a8f[1], true);
            $_3741c = substr(md5($_c3a8f[0] . $_c3a8f[2] . $_c5222 . $_c3a8f[1], true), 4);
            self::$_c3a8f[base64_encode($_3741c)] = $_c3a8f;
            if ($_67044['fb051c96']) {
                $_ae916 = array(crc32($_3741c . $_c3a8f[0]) ^ self::$_c3392[1], crc32($_3741c . $_c3a8f[1]) ^ self::$_c3392[0]);
                $_ae916[2] = md5($_ae916[0] . $_c3a8f[2] . $_ae916[1], true);
                $_39d57 = substr(md5($_ae916[0] . $_ae916[2] . $_c3a8f[2] . $_ae916[1], true), 4);
                self::$_ae916[base64_encode($_39d57)] = $_ae916;
                for ($_7a91f = 0; isset($code[$_7a91f]); ++$_7a91f) $code[$_7a91f] = chr((ord($code[$_7a91f]) + ord(self::$_ab0da[1][$_7a91f & 0xf])) ^ ord(self::$_ab0da[0][$_7a91f & 0xf]) & 0xff);
                for ($_7a91f = 0; isset($code[$_7a91f + 1]); ++$_7a91f) $code[$_7a91f + 1] = chr((ord($code[$_7a91f + 1]) + ord(self::$_ab0da[0][$_7a91f & 0xf]) & 0xff) ^ ord(self::$_ab0da[1][$_7a91f & 0xf]) ^ ord($code[$_7a91f]));
                $_a408d = unpack('N', substr($code, 0, 4));
                $_a408d = $_a408d[1] ^ $_c3a8f[0];
                $_b2a53 = substr($code, $_a408d + 4);
                $code = substr($code, 4, $_a408d);
                $_86bff = $partition = array();
                $_a408d = unpack('N', substr($_b2a53, 0, 4));
                $_a408d = $_a408d[1] ^ $_c3a8f[0];
                for ($_7a91f = 1; $_7a91f <= $_a408d; ++$_7a91f) {
                    $_86bff[$_7a91f] = unpack('N', substr($_b2a53, $_7a91f * 4, 4));
                    $_86bff[$_7a91f] = $_86bff[$_7a91f][1] ^ $_c3a8f[0];
                }
                $_b2a53 = substr($_b2a53, $_7a91f * 4);
                for ($_7a91f = 0; isset($_b2a53[$_7a91f + 4]);) {
                    $_a408d = unpack('N', substr($_b2a53, $_7a91f, 4));
                    $_a408d = $_a408d[1] ^ $_c3a8f[0];
                    $_7a91f += 4;
                    $partition[] = substr($_b2a53, $_7a91f, $_a408d);
                    $_7a91f += $_a408d;
                }
                unset($_b2a53);
                self::$partition = $partition;
                unset($partition);
            } else $_86bff = array();
            self::$_c3392 = array(0x67452301, 0xefcdab89);
            self::$_ab0da = array();
            self::$_bec53 = null;
            $_a876e = 12345678;
            unset($_a876e);
            if (!$_67044['bea3c68d']) {
                self::$_09ac8 = false;
                return $code;
            }
            if ($_67044['b93558b2']) {
                $_09ac8 = true;
                foreach ($_4385a as $_4a08d) {
                    if (isset($_4a08d['class']) && in_array($_4a08d['function'], array('run', 'hookingDetected', '{closure}')) && $_4a08d['type'] == '::' && strpos($_4a08d['class'], "\x41\x6c\x6f\x6d\x44\x65\x63\x6f\x64\x65\x72") === 0) ; elseif (isset($_4a08d['function']) && !in_array($_4a08d['function'], ['include', 'include_once', 'require', 'require_once', 'eval'])) {
                        $_09ac8 = false;
                        break;
                    }
                }
                self::$_09ac8 = $_09ac8;
            } else {
                self::$_09ac8 = $_09ac8 = false;
            }
            if ($_09ac8) {
                $_7872a = gzinflate($_7872a);
                for ($_7a91f = 0; isset($_7872a[$_7a91f]);) {
                    $_9c3b1 = unpack('N', substr($_7872a, $_7a91f, 4));
                    $_7a91f += 4;
                    $_6749b = ord($_7872a[$_7a91f++]);
                    $_23bc0 = ord($_7872a[$_7a91f++]);
                    $_d3605 = substr($_7872a, $_7a91f, $_6749b);
                    $_7a91f += $_6749b;
                    $code = substr($code, 0, $_9c3b1[1]) . $_d3605 . substr($code, $_9c3b1[1] + $_23bc0);
                }
                (function ($_ALOM_code) {
                    self::$rtnev = eval($_ALOM_code);
                })("$code" . ($code = ''));
            } else {
                (function ($_ALOM_code) {
                    foreach (self::$vrs as $_ALOM_key => $_ALOM_val) if (!in_array($_ALOM_key, ['_ALOM_key', '_ALOM_val', 'GLOBALS'])) $$_ALOM_key =& self::$vrs[$_ALOM_key];
                    if (isset($_ALOM_key)) {
                        unset($_ALOM_key, $_ALOM_val);
                    }
                    self::$vrs = array();
                    self::$rtnev = eval($_ALOM_code);
                    foreach (get_defined_vars() as $_ALOM_key => $_ALOM_val) if (!in_array($_ALOM_key, ['_ALOM_key', '_ALOM_val', 'GLOBALS'])) self::$vrs[$_ALOM_key] =& $$_ALOM_key;
                })("$code" . ($code = ''));
            }
            unset($code);
            $_b1623 = "// Protected by Alom Obfuscator";
            if (rand(0, 1)) eval($_b1623);
            $_5c03d = 'foreach(\AlomDecoder::$vrs as $_ALOM_key=>&$_ALOM_val)$$_ALOM_key=&$_ALOM_val;';
            $_5c03d .= 'if(isset($_ALOM_key))unset($_ALOM_key,$_ALOM_val);return \AlomDecoder::$rtnev;';
            $_5c03d .= "\n$_b1623";
            return $_5c03d;
        }
    }

    if (!function_exists('alom_protect_var')) {
        function alom_protect_var($_f7955)
        {
            AlomDecoder::protectvar($_f7955);
        }
    }
    AlomDecoder::$_d6ac1 = extension_loaded('phar');
})();
return 1;
