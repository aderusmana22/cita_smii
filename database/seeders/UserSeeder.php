<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            ['nik' => 'S0905', 'name' => 'Jimmy Ferdinand', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AE1270', 'name' => 'Syaiful Syahrizal', 'section' => 'HCD'],
            ['nik' => 'M0812', 'name' => 'Djarot Hendrawan', 'section' => 'Marsho'],
            ['nik' => 'T0930', 'name' => 'Linda Rianty', 'section' => 'Purchasing'],
            ['nik' => 'T0932', 'name' => 'Arief Fazry', 'section' => 'Creative Business Transformation'],
            ['nik' => 'AE1279', 'name' => 'Fitriyah Rahayu', 'section' => 'Export Admin'],
            ['nik' => 'AC1166', 'name' => 'Dimas Supriyadi', 'section' => 'Batch Refinery'],
            ['nik' => 'A0121', 'name' => 'Mujiyono', 'section' => 'Batch Refinery'],
            ['nik' => 'AE1275', 'name' => 'Ahmad Suryalatif', 'section' => 'Batch Refinery'],
            ['nik' => 'A0163', 'name' => 'Sutikno', 'section' => 'Batch Refinery'],
            ['nik' => 'F0629', 'name' => 'Ali Maksum', 'section' => 'Batch Refinery'],
            ['nik' => 'I0726', 'name' => 'Asep Sopiana', 'section' => 'Batch Refinery'],
            ['nik' => 'N0826', 'name' => 'Ahmad Sanusi', 'section' => 'Batch Refinery'],
            ['nik' => 'A0150', 'name' => 'Sumadi', 'section' => 'Batch Refinery'],
            ['nik' => 'F0607', 'name' => 'Sudarmanta', 'section' => 'Batch Refinery'],
            ['nik' => 'H0670', 'name' => 'Endra Komara', 'section' => 'Batch Refinery'],
            ['nik' => 'H0674', 'name' => 'Yulianto', 'section' => 'Batch Refinery'],
            ['nik' => 'I0729', 'name' => 'Musyaddad', 'section' => 'Batch Refinery'],
            ['nik' => 'K0781', 'name' => 'Agus Uminir', 'section' => 'Batch Refinery'],
            ['nik' => 'K0784', 'name' => 'Juhardani', 'section' => 'Batch Refinery'],
            ['nik' => 'K0785', 'name' => 'Junaidi', 'section' => 'Batch Refinery'],
            ['nik' => 'U0956', 'name' => 'Madin', 'section' => 'Batch Refinery'],
            ['nik' => 'U0957', 'name' => 'Dwi Hastono', 'section' => 'Batch Refinery'],
            ['nik' => 'AC1170', 'name' => 'Nein', 'section' => 'Batch Refinery'],
            ['nik' => 'AC1188', 'name' => 'Sultan Syahjamawi Ali', 'section' => 'Batch Refinery'],
            ['nik' => 'AD1226', 'name' => 'Ubaidilah', 'section' => 'Batch Refinery'],
            ['nik' => 'AE1254', 'name' => 'Fikri Irmawan', 'section' => 'Batch Refinery'],
            ['nik' => 'AE1267', 'name' => 'Dika Vauzan Sobirin', 'section' => 'Batch Refinery'],
            ['nik' => 'AG1323', 'name' => 'Ammar Fauzan', 'section' => 'Batch Refinery'],
            ['nik' => 'U0955', 'name' => 'Danu Purboyo', 'section' => 'Business Controller'],
            ['nik' => 'AB1139', 'name' => 'Ellyza Kusuma Wardani', 'section' => 'Business Controller'],
            ['nik' => 'Z1073', 'name' => 'Kunto Guritno', 'section' => 'Business Controller'],
            ['nik' => 'S0900', 'name' => 'Syahruzar Syam', 'section' => 'East Region'],
            ['nik' => 'K0769', 'name' => 'Jack Gembira Sitinjak', 'section' => 'East Region'],
            ['nik' => 'T0918', 'name' => 'Broto Wahono', 'section' => 'East Region'],
            ['nik' => 'U0941', 'name' => 'Aditiawansyah', 'section' => 'East Region'],
            ['nik' => 'AC1177', 'name' => 'Khairudin', 'section' => 'East Region'],
            ['nik' => 'AF1301', 'name' => 'Arip Haryanto', 'section' => 'East Region'],
            ['nik' => 'X1030', 'name' => 'Sapto Yogasmara', 'section' => 'East Region'],
            ['nik' => 'AF1292', 'name' => 'Arham Bisma Bahari', 'section' => 'East Region'],
            ['nik' => 'AF1295', 'name' => 'Anwar Rusady', 'section' => 'East Region'],
            ['nik' => 'AF1299', 'name' => 'Dewi Nurhayati', 'section' => 'East Region'],
            ['nik' => 'AF1302', 'name' => 'Andrie Setiadi Putera', 'section' => 'East Region'],
            ['nik' => 'AG1319', 'name' => 'Albet Nego', 'section' => 'East Region'],
            ['nik' => 'AG1322', 'name' => 'Hery Martono', 'section' => 'East Region'],
            ['nik' => 'Z1079', 'name' => 'Mifa Miftahul Chair', 'section' => 'East Region'],
            ['nik' => 'AA1104', 'name' => 'Akhmad Sahril', 'section' => 'East Region'],
            ['nik' => 'AC1165', 'name' => 'Leri Christian Manafe', 'section' => 'East Region'],
            ['nik' => 'AC1168', 'name' => 'Sugeng Hariyanto', 'section' => 'East Region'],
            ['nik' => 'AD1234', 'name' => 'Azwar Munif', 'section' => 'East Region'],
            ['nik' => 'AD1237', 'name' => 'Dendi Heriyanto', 'section' => 'East Region'],
            ['nik' => 'AE1272', 'name' => 'Saeful Safar', 'section' => 'East Region'],
            ['nik' => 'AF1297', 'name' => 'Lopu Satria Nugraha', 'section' => 'East Region'],
            ['nik' => 'AF1303', 'name' => 'Nova Lila Sari', 'section' => 'East Region'],
            ['nik' => 'AG1310', 'name' => 'Lepi Candra', 'section' => 'East Region'],
            ['nik' => 'AG1316', 'name' => 'Ali Mahmudi', 'section' => 'East Region'],
            ['nik' => 'AG1321', 'name' => 'Zuniar Usman', 'section' => 'East Region'],
            ['nik' => 'AG1330', 'name' => 'La Ode Saiful, S.Ip', 'section' => 'East Region'],
            ['nik' => 'AG1331', 'name' => 'Muhammad Taufikurrahman', 'section' => 'East Region'],
            ['nik' => 'AG1343', 'name' => 'Rachman Fernanda', 'section' => 'East Region'],
            ['nik' => 'AG1346', 'name' => 'Akhmad Naofal', 'section' => 'East Region'],
            ['nik' => 'A0044', 'name' => 'Hartono', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'V0988', 'name' => 'Muntari', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1317', 'name' => 'Ashar Herrianto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1350', 'name' => 'Adi Ardiansyah', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'A0079', 'name' => 'Suseno', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'N0832', 'name' => 'Iwan Supriyadi', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AC1191', 'name' => 'Dwi Hermanto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AD1224', 'name' => 'Muhammad Ilham Mawazi', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1327', 'name' => 'Heribertus Dwie Nugroho', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1338', 'name' => 'Bagus Ardiyanto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1340', 'name' => 'Muhamad Aldi', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1344', 'name' => 'Husni Mubarok', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'C0375', 'name' => 'Wagiono', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'D0428', 'name' => 'Teguh Suyono', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'D0438', 'name' => 'Surip', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'E0483', 'name' => 'Hasanudin', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'F0599', 'name' => 'Ibrahim M. Saleh', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'G0646', 'name' => 'Kasmanto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'H0657', 'name' => 'Yohanes Winarto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'H0688', 'name' => 'Didi Winarko', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'L0796', 'name' => 'Teguh Waluyo', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'P0852', 'name' => 'Budianto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'S0908', 'name' => 'Heri Riswanto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'T0928', 'name' => 'Dadang Suhana', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'T0929', 'name' => 'Miplahudin', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'V0973', 'name' => 'Andi Irawan', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'V0980', 'name' => 'M. Yusuf M', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'Y1051', 'name' => 'Erik Zulhikman', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'Z1077', 'name' => 'Mulyadi', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AC1189', 'name' => 'Yogi Dimas Jaya', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1324', 'name' => 'Robi Mardi', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1328', 'name' => 'Dias Putra Darmawan', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1329', 'name' => 'Muhammad Rizki', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'B0281', 'name' => 'Syaiful Amri', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'E0528', 'name' => 'Heru Untung  Noviantoro', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AD1230', 'name' => 'Muhamad Zen Mustofa', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AF1289', 'name' => 'Aji Nur Wijayanto', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AG1325', 'name' => 'Sokhihul islam', 'section' => 'Engineering & Maintenance'],
            ['nik' => 'AD1214', 'name' => 'Rainita Darmadi', 'section' => 'Finance'],
            ['nik' => 'R0890', 'name' => 'Bonny Regina Sandy', 'section' => 'Finance'],
            ['nik' => 'Y1045', 'name' => 'Drajat Budiarto', 'section' => 'Finance'],
            ['nik' => 'I0718', 'name' => 'Nanik Candra Cahyani', 'section' => 'Finance'],
            ['nik' => 'I0722', 'name' => 'Rita Rahayu', 'section' => 'Finance'],
            ['nik' => 'P0854', 'name' => 'Mirza Purnomo', 'section' => 'Finance'],
            ['nik' => 'U0946', 'name' => 'Eko Kusmaryanto', 'section' => 'Finance'],
            ['nik' => 'F0627', 'name' => 'Moh. Riyad', 'section' => 'Finance'],
            ['nik' => 'T0917', 'name' => 'Vincensius Rezki', 'section' => 'Finance'],
            ['nik' => 'AB1151', 'name' => 'Ratih Ayu Lestari', 'section' => 'Finance'],
            ['nik' => 'AE1274', 'name' => 'Shara Cahyanie', 'section' => 'Finance'],
            ['nik' => 'Y1046', 'name' => 'Achmad Suheri', 'section' => 'Finance'],
            ['nik' => 'AF1294', 'name' => 'Tamara Julietta', 'section' => 'GA'],
            ['nik' => 'R0893', 'name' => 'Intan Wulan Sari', 'section' => 'GA'],
            ['nik' => 'S0903', 'name' => 'Nahrowi', 'section' => 'GA'],
            ['nik' => 'AF1306', 'name' => 'Hilmy Fauzan', 'section' => 'GA'],
            ['nik' => 'H0689', 'name' => 'Suwanto', 'section' => 'HCD'],
            ['nik' => 'K0782', 'name' => 'Vitria Hartati', 'section' => 'HCD'],
            ['nik' => 'AG1335', 'name' => 'Andina Nurmalia', 'section' => 'HCD'],
            ['nik' => 'AG1339', 'name' => 'Gatot Widjanarko', 'section' => 'HCD'],
            ['nik' => 'E0499', 'name' => 'Suparmanto', 'section' => 'HCD'],
            ['nik' => 'M0809', 'name' => 'Herry Latif Pujianto', 'section' => 'HCD'],
            ['nik' => 'X1022', 'name' => 'Murodih', 'section' => 'HCD'],
            ['nik' => 'AG1345', 'name' => 'Billy Fernando Pasaribu', 'section' => 'HSE'],
            ['nik' => 'AE1258', 'name' => 'Maria Uli Fransisca  ', 'section' => 'HSE'],
            ['nik' => 'U0958', 'name' => 'Sri Cahyani Dwi Anggoro', 'section' => 'Industrial & Key Account'],
            ['nik' => 'U0950', 'name' => 'Rofika', 'section' => 'Industrial & Key Account'],
            ['nik' => 'W1011', 'name' => 'Mufti Allutfi', 'section' => 'Industrial & Key Account'],
            ['nik' => 'AD1231', 'name' => 'Dinur Yuwidiyanto', 'section' => 'Industrial & Key Account'],
            ['nik' => 'AB1128', 'name' => 'Rianto Wibisono', 'section' => 'Industrial & Key Account'],
            ['nik' => 'AE1249', 'name' => 'An Nisaa Catur Pekerti', 'section' => 'Industrial & Key Account'],
            ['nik' => 'AF1304', 'name' => 'Amy Rhetorica', 'section' => 'Industrial & Key Account'],
            ['nik' => 'Q0872', 'name' => 'Novalina Saragih', 'section' => 'International Sales'],
            ['nik' => 'AB1149', 'name' => 'Natasha Tachjadi', 'section' => 'International Sales'],
            ['nik' => 'U0947', 'name' => 'Sangudin', 'section' => 'Logistic'],
            ['nik' => 'C0393', 'name' => 'Gusriyanto', 'section' => 'Logistic'],
            ['nik' => 'G0639', 'name' => 'Achmad Saefudin', 'section' => 'Logistic'],
            ['nik' => 'AD1241', 'name' => 'Prio Pambudi', 'section' => 'Logistic'],
            ['nik' => 'F0585', 'name' => 'Rito\'at', 'section' => 'Logistic'],
            ['nik' => 'J0742', 'name' => 'Nurul Firdaus', 'section' => 'Logistic'],
            ['nik' => 'W0999', 'name' => 'Linia Maulina Sari', 'section' => 'Logistic'],
            ['nik' => 'C0297', 'name' => 'Iyus Suhendar', 'section' => 'Logistic'],
            ['nik' => 'D0425', 'name' => 'Mulud', 'section' => 'Logistic'],
            ['nik' => 'D0480', 'name' => 'Tumino', 'section' => 'Logistic'],
            ['nik' => 'D0481', 'name' => 'Tajudin', 'section' => 'Logistic'],
            ['nik' => 'G0632', 'name' => 'Sumedi', 'section' => 'Logistic'],
            ['nik' => 'J0732', 'name' => 'Arif Rifa\'i', 'section' => 'Logistic'],
            ['nik' => 'L0793', 'name' => 'Mustakim', 'section' => 'Logistic'],
            ['nik' => 'Y1040', 'name' => 'Lukman Hakim', 'section' => 'Logistic'],
            ['nik' => 'Z1072', 'name' => 'Aris Suhariyanto', 'section' => 'Logistic'],
            ['nik' => 'AB1153', 'name' => 'Sulaeman', 'section' => 'Logistic'],
            ['nik' => 'AC1195', 'name' => 'Bayu Wahyudin', 'section' => 'Logistic'],
            ['nik' => 'AD1211', 'name' => 'Erfan Hermawan', 'section' => 'Logistic'],
            ['nik' => 'AD1218', 'name' => 'Tri Ariyanto', 'section' => 'Logistic'],
            ['nik' => 'AD1221', 'name' => 'M. Anwar Fuadi', 'section' => 'Logistic'],
            ['nik' => 'AD1222', 'name' => 'Zaenal Abidin', 'section' => 'Logistic'],
            ['nik' => 'AD1229', 'name' => 'Marsono', 'section' => 'Logistic'],
            ['nik' => 'AD1232', 'name' => 'Irsan Rifqi', 'section' => 'Logistic'],
            ['nik' => 'AE1250', 'name' => 'Joko Triwibowo', 'section' => 'Logistic'],
            ['nik' => 'AF1284', 'name' => 'Abul Basri', 'section' => 'Logistic'],
            ['nik' => 'AG1347', 'name' => 'Aan Kurniawan', 'section' => 'Logistic'],
            ['nik' => 'AG1349', 'name' => 'Azzi Muhamad Gustian', 'section' => 'Logistic'],
            ['nik' => 'U0960', 'name' => 'Ali Rido', 'section' => 'Logistic'],
            ['nik' => 'Z1078', 'name' => 'Ibnu Ubaedillah', 'section' => 'Logistic'],
            ['nik' => 'A0192', 'name' => 'Haryanto Makmoer', 'section' => 'Marketing'],
            ['nik' => 'AG1337', 'name' => 'George Novaro Tarigan', 'section' => 'Marketing'],
            ['nik' => 'W1005', 'name' => 'Yovi Susanti', 'section' => 'Marketing'],
            ['nik' => 'AG1313', 'name' => 'Gabriella Stephanie Gultom', 'section' => 'Marketing'],
            ['nik' => 'AE1268', 'name' => 'Dinah Dzakiyyah Rasikhah', 'section' => 'Marketing'],
            ['nik' => 'AD1228', 'name' => 'Kelfin Alamanda', 'section' => 'Marketing'],
            ['nik' => 'C0291', 'name' => 'Sari Widodo', 'section' => 'Marsho'],
            ['nik' => 'D0432', 'name' => 'Kurnaen', 'section' => 'Marsho'],
            ['nik' => 'E0506', 'name' => 'Anda Lumban Tobing', 'section' => 'Marsho'],
            ['nik' => 'E0518', 'name' => 'Gentur Budhiman', 'section' => 'Marsho'],
            ['nik' => 'E0521', 'name' => 'Muh. Asyrofi', 'section' => 'Marsho'],
            ['nik' => 'E0522', 'name' => 'Sugi Hartanto', 'section' => 'Marsho'],
            ['nik' => 'E0524', 'name' => 'Agus Sumardi', 'section' => 'Marsho'],
            ['nik' => 'E0540', 'name' => 'Paryono', 'section' => 'Marsho'],
            ['nik' => 'H0680', 'name' => 'Sudiono', 'section' => 'Marsho'],
            ['nik' => 'A0063', 'name' => 'Sunardi', 'section' => 'Marsho'],
            ['nik' => 'A0066', 'name' => 'Warno', 'section' => 'Marsho'],
            ['nik' => 'B0222', 'name' => 'Urip', 'section' => 'Marsho'],
            ['nik' => 'C0314', 'name' => 'Sultan Agung', 'section' => 'Marsho'],
            ['nik' => 'C0315', 'name' => 'Iman Agus Permana', 'section' => 'Marsho'],
            ['nik' => 'C0321', 'name' => 'Wiyono', 'section' => 'Marsho'],
            ['nik' => 'C0326', 'name' => 'Marjuni Akbari', 'section' => 'Marsho'],
            ['nik' => 'C0332', 'name' => 'Sumarto', 'section' => 'Marsho'],
            ['nik' => 'C0334', 'name' => 'Suparman', 'section' => 'Marsho'],
            ['nik' => 'C0360', 'name' => 'Cecep Supriadi', 'section' => 'Marsho'],
            ['nik' => 'C0414', 'name' => 'Mujianto', 'section' => 'Marsho'],
            ['nik' => 'D0470', 'name' => 'Sujarwo', 'section' => 'Marsho'],
            ['nik' => 'D0471', 'name' => 'Za\'far Aziz  Budy Andhi', 'section' => 'Marsho'],
            ['nik' => 'E0512', 'name' => 'Sukamto', 'section' => 'Marsho'],
            ['nik' => 'E0519', 'name' => 'Tito Sumantri', 'section' => 'Marsho'],
            ['nik' => 'E0552', 'name' => 'Ani Saryanto', 'section' => 'Marsho'],
            ['nik' => 'E0554', 'name' => 'Yudi Supriadi', 'section' => 'Marsho'],
            ['nik' => 'E0557', 'name' => 'Harbin Tambunan', 'section' => 'Marsho'],
            ['nik' => 'F0604', 'name' => 'Kuwatno', 'section' => 'Marsho'],
            ['nik' => 'G0640', 'name' => 'Yudi Windarto', 'section' => 'Marsho'],
            ['nik' => 'G0642', 'name' => 'Priyadi Setiawan', 'section' => 'Marsho'],
            ['nik' => 'G0643', 'name' => 'Suyono', 'section' => 'Marsho'],
            ['nik' => 'G0648', 'name' => 'Kartono', 'section' => 'Marsho'],
            ['nik' => 'G0655', 'name' => 'Ali Imron', 'section' => 'Marsho'],
            ['nik' => 'H0684', 'name' => 'Dwi Haryanto', 'section' => 'Marsho'],
            ['nik' => 'H0702', 'name' => 'Agus Soleh', 'section' => 'Marsho'],
            ['nik' => 'H0705', 'name' => 'Sumantri', 'section' => 'Marsho'],
            ['nik' => 'I0713', 'name' => 'Muhgofal', 'section' => 'Marsho'],
            ['nik' => 'I0725', 'name' => 'Endang Wijaya', 'section' => 'Marsho'],
            ['nik' => 'J0754', 'name' => 'Slamet Susanto', 'section' => 'Marsho'],
            ['nik' => 'J0755', 'name' => 'Hary Supriyatna', 'section' => 'Marsho'],
            ['nik' => 'C0295', 'name' => 'Sartono', 'section' => 'Marsho'],
            ['nik' => 'C0296', 'name' => 'Sarimin', 'section' => 'Marsho'],
            ['nik' => 'D0456', 'name' => 'Ahmad Zeli', 'section' => 'Marsho'],
            ['nik' => 'Z1066', 'name' => 'Muslih', 'section' => 'Marsho'],
            ['nik' => 'AB1142', 'name' => 'Andi Wijaya', 'section' => 'Marsho'],
            ['nik' => 'AB1143', 'name' => 'Marzuki', 'section' => 'Marsho'],
            ['nik' => 'AC1178', 'name' => 'Hamzah', 'section' => 'Marsho'],
            ['nik' => 'AC1179', 'name' => 'Ahmad Fauzi', 'section' => 'Marsho'],
            ['nik' => 'AC1180', 'name' => 'Bagus Santoso', 'section' => 'Marsho'],
            ['nik' => 'AE1251', 'name' => 'Muarif', 'section' => 'Marsho'],
            ['nik' => 'AE1252', 'name' => 'Muhamad Sidik', 'section' => 'Marsho'],
            ['nik' => 'AE1253', 'name' => 'Ahmad Danofan Rizki', 'section' => 'Marsho'],
            ['nik' => 'AG1342', 'name' => 'Raharjo pecikos dyah sutondo', 'section' => 'Marsho'],
            ['nik' => 'D0453', 'name' => 'Soleman Lungan', 'section' => 'Marsho'],
            ['nik' => 'D0468', 'name' => 'Slamet Iswanto', 'section' => 'Marsho'],
            ['nik' => 'F0606', 'name' => 'Wawan Sofyan', 'section' => 'Marsho'],
            ['nik' => 'H0686', 'name' => 'Agus Slamet Riyadi', 'section' => 'Marsho'],
            ['nik' => 'AD1227', 'name' => 'Andika Suhendar', 'section' => 'MIS'],
            ['nik' => 'AE1244', 'name' => 'Samuel David Christoper', 'section' => 'MIS'],
            ['nik' => 'AG1315', 'name' => 'Ade Rusmana', 'section' => 'MIS'],
            ['nik' => 'U0942', 'name' => 'Muchammad Arif Fathoni', 'section' => 'PPIC'],
            ['nik' => 'F0569', 'name' => 'Yudha Satriya', 'section' => 'PPIC'],
            ['nik' => 'F0617', 'name' => 'Irma Nurbayani', 'section' => 'PPIC'],
            ['nik' => 'J0745', 'name' => 'Irwan Setiawan', 'section' => 'PPIC'],
            ['nik' => 'T0934', 'name' => 'Moh. Ainun Naim', 'section' => 'PPIC'],
            ['nik' => 'Z1054', 'name' => 'Juni Asliah Batubara', 'section' => 'PPIC'],
            ['nik' => 'E0531', 'name' => 'Rahman', 'section' => 'Purchasing'],
            ['nik' => 'AG1318', 'name' => 'Suryani Pratiwi Lim', 'section' => 'Purchasing'],
            ['nik' => 'AF1305', 'name' => 'Trie Widyaningsih', 'section' => 'Purchasing'],
            ['nik' => 'AG1336', 'name' => 'Djamaludin', 'section' => 'Purchasing'],
            ['nik' => 'AF1308', 'name' => 'Millicent Songster', 'section' => 'QA'],
            ['nik' => 'E0539', 'name' => 'Lensiyani', 'section' => 'QA'],
            ['nik' => 'Z1068', 'name' => 'Vania Deborauli Siregar', 'section' => 'QA'],
            ['nik' => 'W1003', 'name' => 'FX Surya Budi Santosa', 'section' => 'QA'],
            ['nik' => 'AF1296', 'name' => 'Jeremy Louis Adisurya', 'section' => 'QA'],
            ['nik' => 'D0436', 'name' => 'Edi Tri Maryanto', 'section' => 'QC'],
            ['nik' => 'E0537', 'name' => 'Edy Purwanto', 'section' => 'QC'],
            ['nik' => 'S0907', 'name' => 'Dian Purwandaka', 'section' => 'QC'],
            ['nik' => 'T0922', 'name' => 'Agus Sudarmaji', 'section' => 'QC'],
            ['nik' => 'T0923', 'name' => 'Juli Hadiyanto', 'section' => 'QC'],
            ['nik' => 'U0938', 'name' => 'Umar Wira Hadi Kusuma', 'section' => 'QC'],
            ['nik' => 'AG1348', 'name' => 'Adiona Eka Saputra', 'section' => 'QC'],
            ['nik' => 'AC1157', 'name' => 'Dedy Yuda Tri Artanto', 'section' => 'QC'],
            ['nik' => 'Q0881', 'name' => 'Muyarni', 'section' => 'R & D'],
            ['nik' => 'U0939', 'name' => 'Trancy Chandra', 'section' => 'R & D'],
            ['nik' => 'U0954', 'name' => 'Suroto', 'section' => 'R & D'],
            ['nik' => 'AE1263', 'name' => 'Irfan Raditya Hendraputra', 'section' => 'R & D'],
            ['nik' => 'AE1264', 'name' => 'Elia Herlina Dwiyanti', 'section' => 'R & D'],
            ['nik' => 'Y1050', 'name' => 'Nahason Haria', 'section' => 'RTM'],
            ['nik' => 'A0187', 'name' => 'Sulis Setianingsih', 'section' => 'RTM'],
            ['nik' => 'AB1150', 'name' => 'Finka Thalia Yosepine', 'section' => 'RTM'],
            ['nik' => 'AC1156', 'name' => 'Ayu Untari Putri', 'section' => 'Sales Admin'],
            ['nik' => 'X1017', 'name' => 'Putri Wulandari', 'section' => 'Sales Admin'],
            ['nik' => 'AE1277', 'name' => 'Tommy Christian', 'section' => 'Sales Admin'],
            ['nik' => 'Q0858', 'name' => 'Reginald Iskandar', 'section' => 'Technical'],
            ['nik' => 'F0609', 'name' => 'Rodikin', 'section' => 'Technical'],
            ['nik' => 'Q0860', 'name' => 'Munkus Whisnu Dwi Saputra', 'section' => 'Technical'],
            ['nik' => 'U0945', 'name' => 'Chandra Humanita', 'section' => 'Technical'],
            ['nik' => 'H0682', 'name' => 'Nia Maulina', 'section' => 'Technical'],
            ['nik' => 'V0961', 'name' => 'Rury Pratama', 'section' => 'Technical'],
            ['nik' => 'AB1117', 'name' => 'Dhani Irfantoro', 'section' => 'Technical'],
            ['nik' => 'AB1118', 'name' => 'Martin Paulus Sinaga', 'section' => 'Technical'],
            ['nik' => 'AA1095', 'name' => 'Christoforus Kevin', 'section' => 'Technical'],
            ['nik' => 'AB1133', 'name' => 'Rizal Anwar', 'section' => 'Technical'],
            ['nik' => 'AB1135', 'name' => 'Panca Setiawan', 'section' => 'Technical'],
            ['nik' => 'AB1141', 'name' => 'Nugraha Amrul Fahlevi Lubis', 'section' => 'Technical'],
            ['nik' => 'AB1148', 'name' => 'Clara Adelina', 'section' => 'Technical'],
            ['nik' => 'AD1205', 'name' => 'Zen Ekasari', 'section' => 'Technical'],
            ['nik' => 'AE1256', 'name' => 'Putri Yashi Nabilah', 'section' => 'Technical'],
            ['nik' => 'AF1287', 'name' => 'Sonny Pratama Mandira', 'section' => 'Technical'],
            ['nik' => 'AG1334', 'name' => 'Jeltrin Kembuan', 'section' => 'Technical'],
            ['nik' => 'K0761', 'name' => 'Soebianto Halim', 'section' => 'West Region'],
            ['nik' => 'F0590', 'name' => 'Antony Horianto', 'section' => 'West Region'],
            ['nik' => 'K0778', 'name' => 'Jumhasrifel', 'section' => 'West Region'],
            ['nik' => 'S0895', 'name' => 'Misno', 'section' => 'West Region'],
            ['nik' => 'Y1042', 'name' => 'Chien Siang', 'section' => 'West Region'],
            ['nik' => 'AF1291', 'name' => 'Fredy Salim', 'section' => 'West Region'],
            ['nik' => 'AF1307', 'name' => 'Alfons Edward Sugito Palondongan', 'section' => 'West Region'],
            ['nik' => 'F0584', 'name' => 'Budy Kristanto', 'section' => 'West Region'],
            ['nik' => 'K0771', 'name' => 'Santo Salim', 'section' => 'West Region'],
            ['nik' => 'Q0883', 'name' => 'Molek Susilawati', 'section' => 'West Region'],
            ['nik' => 'V0981', 'name' => 'Nyimas Mariam', 'section' => 'West Region'],
            ['nik' => 'W1002', 'name' => 'Agus Sujana', 'section' => 'West Region'],
            ['nik' => 'AA1088', 'name' => 'Yudha Nugraha', 'section' => 'West Region'],
            ['nik' => 'AA1098', 'name' => 'Siswadi', 'section' => 'West Region'],
            ['nik' => 'AA1108', 'name' => 'Wilson Macmiland', 'section' => 'West Region'],
            ['nik' => 'AC1167', 'name' => 'Dedi Mangampu Tua', 'section' => 'West Region'],
            ['nik' => 'AC1174', 'name' => 'Franies Matriyanto Yohakim Tandawuya', 'section' => 'West Region'],
            ['nik' => 'AD1235', 'name' => 'Federich Arswendo Perwira Negara', 'section' => 'West Region'],
            ['nik' => 'AD1239', 'name' => 'Andrey Hermawan', 'section' => 'West Region'],
            ['nik' => 'AE1261', 'name' => 'Noor Kurnia Andrean', 'section' => 'West Region'],
            ['nik' => 'AG1312', 'name' => 'Andrea Aji Asmara', 'section' => 'West Region'],
            ['nik' => 'AG1314', 'name' => 'Achmad Fauzi', 'section' => 'West Region'],
            ['nik' => 'AA1100', 'name' => 'Yandri Fahmi', 'section' => 'West Region'],
            ['nik' => 'AA1112', 'name' => 'Kevin Wijaya', 'section' => 'West Region'],
            ['nik' => 'AB1123', 'name' => 'Suhadi', 'section' => 'West Region'],
            ['nik' => 'AD1236', 'name' => 'Hendro Prayetno', 'section' => 'West Region'],
            ['nik' => 'AF1281', 'name' => 'Muhamad Faiq Renaldiandadinata', 'section' => 'West Region'],
            ['nik' => 'AF1286', 'name' => 'Teni Muhamad Rijal', 'section' => 'West Region'],
            ['nik' => 'AG1326', 'name' => 'Dadang Achmad Fadoli', 'section' => 'West Region'],
        ];

        $sections = DB::table('sections')->pluck('id', 'name')->toArray();

        foreach ($users as $user) {
            $nameParts = explode(' ', $user['name']);
            $firstName = strtolower($nameParts[0]);
            $email = $firstName . '@smii.co.id';

            DB::table('users')->insert([
                'nik' => $user['nik'],
                'name' => $user['name'],
                'email' => $email,
                'password' => Hash::make('password'), // Menggunakan Hash untuk password
                'avatar' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'department_id' => rand(1, 8),
                'position_id' => rand(3, 14),
                'section_id' => $sections[$user['section']],
            ]);
        }
    }
}