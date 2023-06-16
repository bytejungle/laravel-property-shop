<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // available countries
        $countries = [
            [
                'iso_3166_1_alpha_2' => 'AF',
                'name' => 'Afghanistan',
                'phone_code' => 93
            ],
            [
                'iso_3166_1_alpha_2' => 'AL',
                'name' => 'Albania',
                'phone_code' => 355
            ],
            [
                'iso_3166_1_alpha_2' => 'DZ',
                'name' => 'Algeria',
                'phone_code' => 213
            ],
            [
                'iso_3166_1_alpha_2' => 'AS',
                'name' => 'American Samoa',
                'phone_code' => 1684
            ],
            [
                'iso_3166_1_alpha_2' => 'AD',
                'name' => 'Andorra',
                'phone_code' => 376
            ],
            [
                'iso_3166_1_alpha_2' => 'AO',
                'name' => 'Angola',
                'phone_code' => 244
            ],
            [
                'iso_3166_1_alpha_2' => 'AI',
                'name' => 'Anguilla',
                'phone_code' => 1264
            ],
            [
                'iso_3166_1_alpha_2' => 'AQ',
                'name' => 'Antarctica',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phone_code' => 1268
            ],
            [
                'iso_3166_1_alpha_2' => 'AR',
                'name' => 'Argentina',
                'phone_code' => 54
            ],
            [
                'iso_3166_1_alpha_2' => 'AM',
                'name' => 'Armenia',
                'phone_code' => 374
            ],
            [
                'iso_3166_1_alpha_2' => 'AW',
                'name' => 'Aruba',
                'phone_code' => 297
            ],
            [
                'iso_3166_1_alpha_2' => 'AU',
                'name' => 'Australia',
                'phone_code' => 61
            ],
            [
                'iso_3166_1_alpha_2' => 'AT',
                'name' => 'Austria',
                'phone_code' => 43
            ],
            [
                'iso_3166_1_alpha_2' => 'AZ',
                'name' => 'Azerbaijan',
                'phone_code' => 994
            ],
            [
                'iso_3166_1_alpha_2' => 'BS',
                'name' => 'Bahamas The',
                'phone_code' => 1242
            ],
            [
                'iso_3166_1_alpha_2' => 'BH',
                'name' => 'Bahrain',
                'phone_code' => 973
            ],
            [
                'iso_3166_1_alpha_2' => 'BD',
                'name' => 'Bangladesh',
                'phone_code' => 880
            ],
            [
                'iso_3166_1_alpha_2' => 'BB',
                'name' => 'Barbados',
                'phone_code' => 1246
            ],
            [
                'iso_3166_1_alpha_2' => 'BY',
                'name' => 'Belarus',
                'phone_code' => 375
            ],
            [
                'iso_3166_1_alpha_2' => 'BE',
                'name' => 'Belgium',
                'phone_code' => 32
            ],
            [
                'iso_3166_1_alpha_2' => 'BZ',
                'name' => 'Belize',
                'phone_code' => 501
            ],
            [
                'iso_3166_1_alpha_2' => 'BJ',
                'name' => 'Benin',
                'phone_code' => 229
            ],
            [
                'iso_3166_1_alpha_2' => 'BM',
                'name' => 'Bermuda',
                'phone_code' => 1441
            ],
            [
                'iso_3166_1_alpha_2' => 'BT',
                'name' => 'Bhutan',
                'phone_code' => 975
            ],
            [
                'iso_3166_1_alpha_2' => 'BO',
                'name' => 'Bolivia',
                'phone_code' => 591
            ],
            [
                'iso_3166_1_alpha_2' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phone_code' => 387
            ],
            [
                'iso_3166_1_alpha_2' => 'BW',
                'name' => 'Botswana',
                'phone_code' => 267
            ],
            [
                'iso_3166_1_alpha_2' => 'BV',
                'name' => 'Bouvet Island',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'BR',
                'name' => 'Brazil',
                'phone_code' => 55
            ],
            [
                'iso_3166_1_alpha_2' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phone_code' => 246
            ],
            [
                'iso_3166_1_alpha_2' => 'BN',
                'name' => 'Brunei',
                'phone_code' => 673
            ],
            [
                'iso_3166_1_alpha_2' => 'BG',
                'name' => 'Bulgaria',
                'phone_code' => 359
            ],
            [
                'iso_3166_1_alpha_2' => 'BF',
                'name' => 'Burkina Faso',
                'phone_code' => 226
            ],
            [
                'iso_3166_1_alpha_2' => 'BI',
                'name' => 'Burundi',
                'phone_code' => 257
            ],
            [
                'iso_3166_1_alpha_2' => 'KH',
                'name' => 'Cambodia',
                'phone_code' => 855
            ],
            [
                'iso_3166_1_alpha_2' => 'CM',
                'name' => 'Cameroon',
                'phone_code' => 237
            ],
            [
                'iso_3166_1_alpha_2' => 'CA',
                'name' => 'Canada',
                'phone_code' => 1
            ],
            [
                'iso_3166_1_alpha_2' => 'CV',
                'name' => 'Cape Verde',
                'phone_code' => 238
            ],
            [
                'iso_3166_1_alpha_2' => 'KY',
                'name' => 'Cayman Islands',
                'phone_code' => 1345
            ],
            [
                'iso_3166_1_alpha_2' => 'CF',
                'name' => 'Central African Republic',
                'phone_code' => 236
            ],
            [
                'iso_3166_1_alpha_2' => 'TD',
                'name' => 'Chad',
                'phone_code' => 235
            ],
            [
                'iso_3166_1_alpha_2' => 'CL',
                'name' => 'Chile',
                'phone_code' => 56
            ],
            [
                'iso_3166_1_alpha_2' => 'CN',
                'name' => 'China',
                'phone_code' => 86
            ],
            [
                'iso_3166_1_alpha_2' => 'CX',
                'name' => 'Christmas Island',
                'phone_code' => 61
            ],
            [
                'iso_3166_1_alpha_2' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'phone_code' => 672
            ],
            [
                'iso_3166_1_alpha_2' => 'CO',
                'name' => 'Colombia',
                'phone_code' => 57
            ],
            [
                'iso_3166_1_alpha_2' => 'KM',
                'name' => 'Comoros',
                'phone_code' => 269
            ],
            [
                'iso_3166_1_alpha_2' => 'CG',
                'name' => 'Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'iso_3166_1_alpha_2' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'iso_3166_1_alpha_2' => 'CK',
                'name' => 'Cook Islands',
                'phone_code' => 682
            ],
            [
                'iso_3166_1_alpha_2' => 'CR',
                'name' => 'Costa Rica',
                'phone_code' => 506
            ],
            [
                'iso_3166_1_alpha_2' => 'CI',
                'name' => 'Cote D Ivoire (Ivory Coast)',
                'phone_code' => 225
            ],
            [
                'iso_3166_1_alpha_2' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'phone_code' => 385
            ],
            [
                'iso_3166_1_alpha_2' => 'CU',
                'name' => 'Cuba',
                'phone_code' => 53
            ],
            [
                'iso_3166_1_alpha_2' => 'CY',
                'name' => 'Cyprus',
                'phone_code' => 357
            ],
            [
                'iso_3166_1_alpha_2' => 'CZ',
                'name' => 'Czech Republic',
                'phone_code' => 420
            ],
            [
                'iso_3166_1_alpha_2' => 'DK',
                'name' => 'Denmark',
                'phone_code' => 45
            ],
            [
                'iso_3166_1_alpha_2' => 'DJ',
                'name' => 'Djibouti',
                'phone_code' => 253
            ],
            [
                'iso_3166_1_alpha_2' => 'DM',
                'name' => 'Dominica',
                'phone_code' => 1767
            ],
            [
                'iso_3166_1_alpha_2' => 'DO',
                'name' => 'Dominican Republic',
                'phone_code' => 1809
            ],
            [
                'iso_3166_1_alpha_2' => 'TP',
                'name' => 'East Timor',
                'phone_code' => 670
            ],
            [
                'iso_3166_1_alpha_2' => 'EC',
                'name' => 'Ecuador',
                'phone_code' => 593
            ],
            [
                'iso_3166_1_alpha_2' => 'EG',
                'name' => 'Egypt',
                'phone_code' => 20
            ],
            [
                'iso_3166_1_alpha_2' => 'SV',
                'name' => 'El Salvador',
                'phone_code' => 503
            ],
            [
                'iso_3166_1_alpha_2' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phone_code' => 240
            ],
            [
                'iso_3166_1_alpha_2' => 'ER',
                'name' => 'Eritrea',
                'phone_code' => 291
            ],
            [
                'iso_3166_1_alpha_2' => 'EE',
                'name' => 'Estonia',
                'phone_code' => 372
            ],
            [
                'iso_3166_1_alpha_2' => 'ET',
                'name' => 'Ethiopia',
                'phone_code' => 251
            ],
            [
                'iso_3166_1_alpha_2' => 'XA',
                'name' => 'External Territories of Australia',
                'phone_code' => 61
            ],
            [
                'iso_3166_1_alpha_2' => 'FK',
                'name' => 'Falkland Islands',
                'phone_code' => 500
            ],
            [
                'iso_3166_1_alpha_2' => 'FO',
                'name' => 'Faroe Islands',
                'phone_code' => 298
            ],
            [
                'iso_3166_1_alpha_2' => 'FJ',
                'name' => 'Fiji Islands',
                'phone_code' => 679
            ],
            [
                'iso_3166_1_alpha_2' => 'FI',
                'name' => 'Finland',
                'phone_code' => 358
            ],
            [
                'iso_3166_1_alpha_2' => 'FR',
                'name' => 'France',
                'phone_code' => 33
            ],
            [
                'iso_3166_1_alpha_2' => 'GF',
                'name' => 'French Guiana',
                'phone_code' => 594
            ],
            [
                'iso_3166_1_alpha_2' => 'PF',
                'name' => 'French Polynesia',
                'phone_code' => 689
            ],
            [
                'iso_3166_1_alpha_2' => 'TF',
                'name' => 'French Southern Territories',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'GA',
                'name' => 'Gabon',
                'phone_code' => 241
            ],
            [
                'iso_3166_1_alpha_2' => 'GM',
                'name' => 'Gambia The',
                'phone_code' => 220
            ],
            [
                'iso_3166_1_alpha_2' => 'GE',
                'name' => 'Georgia',
                'phone_code' => 995
            ],
            [
                'iso_3166_1_alpha_2' => 'DE',
                'name' => 'Germany',
                'phone_code' => 49
            ],
            [
                'iso_3166_1_alpha_2' => 'GH',
                'name' => 'Ghana',
                'phone_code' => 233
            ],
            [
                'iso_3166_1_alpha_2' => 'GI',
                'name' => 'Gibraltar',
                'phone_code' => 350
            ],
            [
                'iso_3166_1_alpha_2' => 'GR',
                'name' => 'Greece',
                'phone_code' => 30
            ],
            [
                'iso_3166_1_alpha_2' => 'GL',
                'name' => 'Greenland',
                'phone_code' => 299
            ],
            [
                'iso_3166_1_alpha_2' => 'GD',
                'name' => 'Grenada',
                'phone_code' => 1473
            ],
            [
                'iso_3166_1_alpha_2' => 'GP',
                'name' => 'Guadeloupe',
                'phone_code' => 590
            ],
            [
                'iso_3166_1_alpha_2' => 'GU',
                'name' => 'Guam',
                'phone_code' => 1671
            ],
            [
                'iso_3166_1_alpha_2' => 'GT',
                'name' => 'Guatemala',
                'phone_code' => 502
            ],
            [
                'iso_3166_1_alpha_2' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phone_code' => 44
            ],
            [
                'iso_3166_1_alpha_2' => 'GN',
                'name' => 'Guinea',
                'phone_code' => 224
            ],
            [
                'iso_3166_1_alpha_2' => 'GW',
                'name' => 'Guinea-Bissau',
                'phone_code' => 245
            ],
            [
                'iso_3166_1_alpha_2' => 'GY',
                'name' => 'Guyana',
                'phone_code' => 592
            ],
            [
                'iso_3166_1_alpha_2' => 'HT',
                'name' => 'Haiti',
                'phone_code' => 509
            ],
            [
                'iso_3166_1_alpha_2' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'HN',
                'name' => 'Honduras',
                'phone_code' => 504
            ],
            [
                'iso_3166_1_alpha_2' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phone_code' => 852
            ],
            [
                'iso_3166_1_alpha_2' => 'HU',
                'name' => 'Hungary',
                'phone_code' => 36
            ],
            [
                'iso_3166_1_alpha_2' => 'IS',
                'name' => 'Iceland',
                'phone_code' => 354
            ],
            [
                'iso_3166_1_alpha_2' => 'IN',
                'name' => 'India',
                'phone_code' => 91
            ],
            [
                'iso_3166_1_alpha_2' => 'ID',
                'name' => 'Indonesia',
                'phone_code' => 62
            ],
            [
                'iso_3166_1_alpha_2' => 'IR',
                'name' => 'Iran',
                'phone_code' => 98
            ],
            [
                'iso_3166_1_alpha_2' => 'IQ',
                'name' => 'Iraq',
                'phone_code' => 964
            ],
            [
                'iso_3166_1_alpha_2' => 'IE',
                'name' => 'Ireland',
                'phone_code' => 353
            ],
            [
                'iso_3166_1_alpha_2' => 'IL',
                'name' => 'Israel',
                'phone_code' => 972
            ],
            [
                'iso_3166_1_alpha_2' => 'IT',
                'name' => 'Italy',
                'phone_code' => 39
            ],
            [
                'iso_3166_1_alpha_2' => 'JM',
                'name' => 'Jamaica',
                'phone_code' => 1876
            ],
            [
                'iso_3166_1_alpha_2' => 'JP',
                'name' => 'Japan',
                'phone_code' => 81
            ],
            [
                'iso_3166_1_alpha_2' => 'XJ',
                'name' => 'Jersey',
                'phone_code' => 44
            ],
            [
                'iso_3166_1_alpha_2' => 'JO',
                'name' => 'Jordan',
                'phone_code' => 962
            ],
            [
                'iso_3166_1_alpha_2' => 'KZ',
                'name' => 'Kazakhstan',
                'phone_code' => 7
            ],
            [
                'iso_3166_1_alpha_2' => 'KE',
                'name' => 'Kenya',
                'phone_code' => 254
            ],
            [
                'iso_3166_1_alpha_2' => 'KI',
                'name' => 'Kiribati',
                'phone_code' => 686
            ],
            [
                'iso_3166_1_alpha_2' => 'KP',
                'name' => 'Korea North',
                'phone_code' => 850
            ],
            [
                'iso_3166_1_alpha_2' => 'KR',
                'name' => 'Korea South',
                'phone_code' => 82
            ],
            [
                'iso_3166_1_alpha_2' => 'KW',
                'name' => 'Kuwait',
                'phone_code' => 965
            ],
            [
                'iso_3166_1_alpha_2' => 'KG',
                'name' => 'Kyrgyzstan',
                'phone_code' => 996
            ],
            [
                'iso_3166_1_alpha_2' => 'LA',
                'name' => 'Laos',
                'phone_code' => 856
            ],
            [
                'iso_3166_1_alpha_2' => 'LV',
                'name' => 'Latvia',
                'phone_code' => 371
            ],
            [
                'iso_3166_1_alpha_2' => 'LB',
                'name' => 'Lebanon',
                'phone_code' => 961
            ],
            [
                'iso_3166_1_alpha_2' => 'LS',
                'name' => 'Lesotho',
                'phone_code' => 266
            ],
            [
                'iso_3166_1_alpha_2' => 'LR',
                'name' => 'Liberia',
                'phone_code' => 231
            ],
            [
                'iso_3166_1_alpha_2' => 'LY',
                'name' => 'Libya',
                'phone_code' => 218
            ],
            [
                'iso_3166_1_alpha_2' => 'LI',
                'name' => 'Liechtenstein',
                'phone_code' => 423
            ],
            [
                'iso_3166_1_alpha_2' => 'LT',
                'name' => 'Lithuania',
                'phone_code' => 370
            ],
            [
                'iso_3166_1_alpha_2' => 'LU',
                'name' => 'Luxembourg',
                'phone_code' => 352
            ],
            [
                'iso_3166_1_alpha_2' => 'MO',
                'name' => 'Macau S.A.R.',
                'phone_code' => 853
            ],
            [
                'iso_3166_1_alpha_2' => 'MK',
                'name' => 'Macedonia',
                'phone_code' => 389
            ],
            [
                'iso_3166_1_alpha_2' => 'MG',
                'name' => 'Madagascar',
                'phone_code' => 261
            ],
            [
                'iso_3166_1_alpha_2' => 'MW',
                'name' => 'Malawi',
                'phone_code' => 265
            ],
            [
                'iso_3166_1_alpha_2' => 'MY',
                'name' => 'Malaysia',
                'phone_code' => 60
            ],
            [
                'iso_3166_1_alpha_2' => 'MV',
                'name' => 'Maldives',
                'phone_code' => 960
            ],
            [
                'iso_3166_1_alpha_2' => 'ML',
                'name' => 'Mali',
                'phone_code' => 223
            ],
            [
                'iso_3166_1_alpha_2' => 'MT',
                'name' => 'Malta',
                'phone_code' => 356
            ],
            [
                'iso_3166_1_alpha_2' => 'XM',
                'name' => 'Man (Isle of)',
                'phone_code' => 44
            ],
            [
                'iso_3166_1_alpha_2' => 'MH',
                'name' => 'Marshall Islands',
                'phone_code' => 692
            ],
            [
                'iso_3166_1_alpha_2' => 'MQ',
                'name' => 'Martinique',
                'phone_code' => 596
            ],
            [
                'iso_3166_1_alpha_2' => 'MR',
                'name' => 'Mauritania',
                'phone_code' => 222
            ],
            [
                'iso_3166_1_alpha_2' => 'MU',
                'name' => 'Mauritius',
                'phone_code' => 230
            ],
            [
                'iso_3166_1_alpha_2' => 'YT',
                'name' => 'Mayotte',
                'phone_code' => 269
            ],
            [
                'iso_3166_1_alpha_2' => 'MX',
                'name' => 'Mexico',
                'phone_code' => 52
            ],
            [
                'iso_3166_1_alpha_2' => 'FM',
                'name' => 'Micronesia',
                'phone_code' => 691
            ],
            [
                'iso_3166_1_alpha_2' => 'MD',
                'name' => 'Moldova',
                'phone_code' => 373
            ],
            [
                'iso_3166_1_alpha_2' => 'MC',
                'name' => 'Monaco',
                'phone_code' => 377
            ],
            [
                'iso_3166_1_alpha_2' => 'MN',
                'name' => 'Mongolia',
                'phone_code' => 976
            ],
            [
                'iso_3166_1_alpha_2' => 'MS',
                'name' => 'Montserrat',
                'phone_code' => 1664
            ],
            [
                'iso_3166_1_alpha_2' => 'MA',
                'name' => 'Morocco',
                'phone_code' => 212
            ],
            [
                'iso_3166_1_alpha_2' => 'MZ',
                'name' => 'Mozambique',
                'phone_code' => 258
            ],
            [
                'iso_3166_1_alpha_2' => 'MM',
                'name' => 'Myanmar',
                'phone_code' => 95
            ],
            [
                'iso_3166_1_alpha_2' => 'NA',
                'name' => 'Namibia',
                'phone_code' => 264
            ],
            [
                'iso_3166_1_alpha_2' => 'NR',
                'name' => 'Nauru',
                'phone_code' => 674
            ],
            [
                'iso_3166_1_alpha_2' => 'NP',
                'name' => 'Nepal',
                'phone_code' => 977
            ],
            [
                'iso_3166_1_alpha_2' => 'AN',
                'name' => 'Netherlands Antilles',
                'phone_code' => 599
            ],
            [
                'iso_3166_1_alpha_2' => 'NL',
                'name' => 'Netherlands The',
                'phone_code' => 31
            ],
            [
                'iso_3166_1_alpha_2' => 'NC',
                'name' => 'New Caledonia',
                'phone_code' => 687
            ],
            [
                'iso_3166_1_alpha_2' => 'NZ',
                'name' => 'New Zealand',
                'phone_code' => 64
            ],
            [
                'iso_3166_1_alpha_2' => 'NI',
                'name' => 'Nicaragua',
                'phone_code' => 505
            ],
            [
                'iso_3166_1_alpha_2' => 'NE',
                'name' => 'Niger',
                'phone_code' => 227
            ],
            [
                'iso_3166_1_alpha_2' => 'NG',
                'name' => 'Nigeria',
                'phone_code' => 234
            ],
            [
                'iso_3166_1_alpha_2' => 'NU',
                'name' => 'Niue',
                'phone_code' => 683
            ],
            [
                'iso_3166_1_alpha_2' => 'NF',
                'name' => 'Norfolk Island',
                'phone_code' => 672
            ],
            [
                'iso_3166_1_alpha_2' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phone_code' => 1670
            ],
            [
                'iso_3166_1_alpha_2' => 'NO',
                'name' => 'Norway',
                'phone_code' => 47
            ],
            [
                'iso_3166_1_alpha_2' => 'OM',
                'name' => 'Oman',
                'phone_code' => 968
            ],
            [
                'iso_3166_1_alpha_2' => 'PK',
                'name' => 'Pakistan',
                'phone_code' => 92
            ],
            [
                'iso_3166_1_alpha_2' => 'PW',
                'name' => 'Palau',
                'phone_code' => 680
            ],
            [
                'iso_3166_1_alpha_2' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phone_code' => 970
            ],
            [
                'iso_3166_1_alpha_2' => 'PA',
                'name' => 'Panama',
                'phone_code' => 507
            ],
            [
                'iso_3166_1_alpha_2' => 'PG',
                'name' => 'Papua new Guinea',
                'phone_code' => 675
            ],
            [
                'iso_3166_1_alpha_2' => 'PY',
                'name' => 'Paraguay',
                'phone_code' => 595
            ],
            [
                'iso_3166_1_alpha_2' => 'PE',
                'name' => 'Peru',
                'phone_code' => 51
            ],
            [
                'iso_3166_1_alpha_2' => 'PH',
                'name' => 'Philippines',
                'phone_code' => 63
            ],
            [
                'iso_3166_1_alpha_2' => 'PN',
                'name' => 'Pitcairn Island',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'PL',
                'name' => 'Poland',
                'phone_code' => 48
            ],
            [
                'iso_3166_1_alpha_2' => 'PT',
                'name' => 'Portugal',
                'phone_code' => 351
            ],
            [
                'iso_3166_1_alpha_2' => 'PR',
                'name' => 'Puerto Rico',
                'phone_code' => 1787
            ],
            [
                'iso_3166_1_alpha_2' => 'QA',
                'name' => 'Qatar',
                'phone_code' => 974
            ],
            [
                'iso_3166_1_alpha_2' => 'RE',
                'name' => 'Reunion',
                'phone_code' => 262
            ],
            [
                'iso_3166_1_alpha_2' => 'RO',
                'name' => 'Romania',
                'phone_code' => 40
            ],
            [
                'iso_3166_1_alpha_2' => 'RU',
                'name' => 'Russia',
                'phone_code' => 70
            ],
            [
                'iso_3166_1_alpha_2' => 'RW',
                'name' => 'Rwanda',
                'phone_code' => 250
            ],
            [
                'iso_3166_1_alpha_2' => 'SH',
                'name' => 'Saint Helena',
                'phone_code' => 290
            ],
            [
                'iso_3166_1_alpha_2' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phone_code' => 1869
            ],
            [
                'iso_3166_1_alpha_2' => 'LC',
                'name' => 'Saint Lucia',
                'phone_code' => 1758
            ],
            [
                'iso_3166_1_alpha_2' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phone_code' => 508
            ],
            [
                'iso_3166_1_alpha_2' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phone_code' => 1784
            ],
            [
                'iso_3166_1_alpha_2' => 'WS',
                'name' => 'Samoa',
                'phone_code' => 684
            ],
            [
                'iso_3166_1_alpha_2' => 'SM',
                'name' => 'San Marino',
                'phone_code' => 378
            ],
            [
                'iso_3166_1_alpha_2' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phone_code' => 239
            ],
            [
                'iso_3166_1_alpha_2' => 'SA',
                'name' => 'Saudi Arabia',
                'phone_code' => 966
            ],
            [
                'iso_3166_1_alpha_2' => 'SN',
                'name' => 'Senegal',
                'phone_code' => 221
            ],
            [
                'iso_3166_1_alpha_2' => 'RS',
                'name' => 'Serbia',
                'phone_code' => 381
            ],
            [
                'iso_3166_1_alpha_2' => 'SC',
                'name' => 'Seychelles',
                'phone_code' => 248
            ],
            [
                'iso_3166_1_alpha_2' => 'SL',
                'name' => 'Sierra Leone',
                'phone_code' => 232
            ],
            [
                'iso_3166_1_alpha_2' => 'SG',
                'name' => 'Singapore',
                'phone_code' => 65
            ],
            [
                'iso_3166_1_alpha_2' => 'SK',
                'name' => 'Slovakia',
                'phone_code' => 421
            ],
            [
                'iso_3166_1_alpha_2' => 'SI',
                'name' => 'Slovenia',
                'phone_code' => 386
            ],
            [
                'iso_3166_1_alpha_2' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phone_code' => 44
            ],
            [
                'iso_3166_1_alpha_2' => 'SB',
                'name' => 'Solomon Islands',
                'phone_code' => 677
            ],
            [
                'iso_3166_1_alpha_2' => 'SO',
                'name' => 'Somalia',
                'phone_code' => 252
            ],
            [
                'iso_3166_1_alpha_2' => 'ZA',
                'name' => 'South Africa',
                'phone_code' => 27
            ],
            [
                'iso_3166_1_alpha_2' => 'GS',
                'name' => 'South Georgia',
                'phone_code' => 0
            ],
            [
                'iso_3166_1_alpha_2' => 'SS',
                'name' => 'South Sudan',
                'phone_code' => 211
            ],
            [
                'iso_3166_1_alpha_2' => 'ES',
                'name' => 'Spain',
                'phone_code' => 34
            ],
            [
                'iso_3166_1_alpha_2' => 'LK',
                'name' => 'Sri Lanka',
                'phone_code' => 94
            ],
            [
                'iso_3166_1_alpha_2' => 'SD',
                'name' => 'Sudan',
                'phone_code' => 249
            ],
            [
                'iso_3166_1_alpha_2' => 'SR',
                'name' => 'Suriname',
                'phone_code' => 597
            ],
            [
                'iso_3166_1_alpha_2' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phone_code' => 47
            ],
            [
                'iso_3166_1_alpha_2' => 'SZ',
                'name' => 'Swaziland',
                'phone_code' => 268
            ],
            [
                'iso_3166_1_alpha_2' => 'SE',
                'name' => 'Sweden',
                'phone_code' => 46
            ],
            [
                'iso_3166_1_alpha_2' => 'CH',
                'name' => 'Switzerland',
                'phone_code' => 41
            ],
            [
                'iso_3166_1_alpha_2' => 'SY',
                'name' => 'Syria',
                'phone_code' => 963
            ],
            [
                'iso_3166_1_alpha_2' => 'TW',
                'name' => 'Taiwan',
                'phone_code' => 886
            ],
            [
                'iso_3166_1_alpha_2' => 'TJ',
                'name' => 'Tajikistan',
                'phone_code' => 992
            ],
            [
                'iso_3166_1_alpha_2' => 'TZ',
                'name' => 'Tanzania',
                'phone_code' => 255
            ],
            [
                'iso_3166_1_alpha_2' => 'TH',
                'name' => 'Thailand',
                'phone_code' => 66
            ],
            [
                'iso_3166_1_alpha_2' => 'TG',
                'name' => 'Togo',
                'phone_code' => 228
            ],
            [
                'iso_3166_1_alpha_2' => 'TK',
                'name' => 'Tokelau',
                'phone_code' => 690
            ],
            [
                'iso_3166_1_alpha_2' => 'TO',
                'name' => 'Tonga',
                'phone_code' => 676
            ],
            [
                'iso_3166_1_alpha_2' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phone_code' => 1868
            ],
            [
                'iso_3166_1_alpha_2' => 'TN',
                'name' => 'Tunisia',
                'phone_code' => 216
            ],
            [
                'iso_3166_1_alpha_2' => 'TR',
                'name' => 'Turkey',
                'phone_code' => 90
            ],
            [
                'iso_3166_1_alpha_2' => 'TM',
                'name' => 'Turkmenistan',
                'phone_code' => 7370
            ],
            [
                'iso_3166_1_alpha_2' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phone_code' => 1649
            ],
            [
                'iso_3166_1_alpha_2' => 'TV',
                'name' => 'Tuvalu',
                'phone_code' => 688
            ],
            [
                'iso_3166_1_alpha_2' => 'UG',
                'name' => 'Uganda',
                'phone_code' => 256
            ],
            [
                'iso_3166_1_alpha_2' => 'UA',
                'name' => 'Ukraine',
                'phone_code' => 380
            ],
            [
                'iso_3166_1_alpha_2' => 'AE',
                'name' => 'United Arab Emirates',
                'phone_code' => 971
            ],
            [
                'iso_3166_1_alpha_2' => 'GB',
                'name' => 'United Kingdom',
                'phone_code' => 44
            ],
            [
                'iso_3166_1_alpha_2' => 'US',
                'name' => 'United States',
                'phone_code' => 1
            ],
            [
                'iso_3166_1_alpha_2' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phone_code' => 1
            ],
            [
                'iso_3166_1_alpha_2' => 'UY',
                'name' => 'Uruguay',
                'phone_code' => 598
            ],
            [
                'iso_3166_1_alpha_2' => 'UZ',
                'name' => 'Uzbekistan',
                'phone_code' => 998
            ],
            [
                'iso_3166_1_alpha_2' => 'VU',
                'name' => 'Vanuatu',
                'phone_code' => 678
            ],
            [
                'iso_3166_1_alpha_2' => 'VA',
                'name' => 'Vatican City State (Holy See)',
                'phone_code' => 39
            ],
            [
                'iso_3166_1_alpha_2' => 'VE',
                'name' => 'Venezuela',
                'phone_code' => 58
            ],
            [
                'iso_3166_1_alpha_2' => 'VN',
                'name' => 'Vietnam',
                'phone_code' => 84
            ],
            [
                'iso_3166_1_alpha_2' => 'VG',
                'name' => 'Virgin Islands (British)',
                'phone_code' => 1284
            ],
            [
                'iso_3166_1_alpha_2' => 'VI',
                'name' => 'Virgin Islands (US)',
                'phone_code' => 1340
            ],
            [
                'iso_3166_1_alpha_2' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phone_code' => 681
            ],
            [
                'iso_3166_1_alpha_2' => 'EH',
                'name' => 'Western Sahara',
                'phone_code' => 212
            ],
            [
                'iso_3166_1_alpha_2' => 'YE',
                'name' => 'Yemen',
                'phone_code' => 967
            ],
            [
                'iso_3166_1_alpha_2' => 'YU',
                'name' => 'Yugoslavia',
                'phone_code' => 38
            ],
            [
                'iso_3166_1_alpha_2' => 'ZM',
                'name' => 'Zambia',
                'phone_code' => 260
            ],
            [
                'iso_3166_1_alpha_2' => 'ZW',
                'name' => 'Zimbabwe',
                'phone_code' => 26
            ],
        ];

        // add timestamps
        foreach ($countries as $index => $country) {
            $countries[$index]['created_at'] = Carbon::now();
            $countries[$index]['updated_at'] = Carbon::now();
        }

        DB::table('countries')->insert($countries);
    }
}
