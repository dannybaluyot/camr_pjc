<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
DB::table('web_page_settings')->insert([
            'default_web_settings' => 1,
			'navigation_header_title' => 'Centralized Automated Meter Reading',
            'image_logo' => "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",
            'header_navigation_width' => 70,
            'login_page_logo_width' => 100,
]);

/*Create User - Admin as Default*/
DB::table('user_tb')->insert([
            'user_name' => 'admin',
			'user_real_name' => 'DEC',
            'user_password' => '$2y$10$mf.POMmfskSb1frX84JdOeu.D4iFT0ot1sO0LBthCw0rRKkcavkJi',
            'user_type' => 'Admin',
			'user_access' => 'ALL',
			'created_at' => NOW(),
            'created_by_user_idx' => 0,
			'updated_at' => NOW(),
            'modified_by_user_idx' => 0
]);

        
/*Configuration File*/
DB::table('meter_configuration_file')->insert( [
'config_id'=>21,
'meter_model'=>'zmd402_serial_2400',
'config_file'=>'zmd402_serial_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>22,
'meter_model'=>'zmd402_serial',
'config_file'=>'zmd402_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>20,
'meter_model'=>'zmd402_optical',
'config_file'=>'zmd402_optical.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>2,
'meter_model'=>'zmd402',
'config_file'=>'zmd402.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>25,
'meter_model'=>'test_2',
'config_file'=>'test_2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>127,
'meter_model'=>'s4x_s1.cfg',
'config_file'=>'s4x_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>23,
'meter_model'=>'s4x.cfg',
'config_file'=>'s4x.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>7,
'meter_model'=>'S4E',
'config_file'=>'s4e.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>138,
'meter_model'=>'pm2100.cfg',
'config_file'=>'pm2100.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>130,
'meter_model'=>'nc30_dlt645.cfg',
'config_file'=>'nc30_dlt645.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>6,
'meter_model'=>'NC30',
'config_file'=>'nc30.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>41,
'meter_model'=>'mk6_cli_s2.cfg',
'config_file'=>'mk6_cli_s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>36,
'meter_model'=>'mk6_cli_s1.cfg',
'config_file'=>'mk6_cli_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>132,
'meter_model'=>'mk6_cli_2400.cfg',
'config_file'=>'mk6_cli_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>37,
'meter_model'=>'mk6_cli.cfg',
'config_file'=>'mk6_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>110,
'meter_model'=>'mk31_serialS1.cfg',
'config_file'=>'mk31_serialS1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>114,
'meter_model'=>'mk31_serial.cfg',
'config_file'=>'mk31_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>53,
'meter_model'=>'mk29_serialS1.cfg',
'config_file'=>'mk29_serialS1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>35,
'meter_model'=>'mk29_serial',
'config_file'=>'mk29_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>125,
'meter_model'=>'mk29E_serial.cfg',
'config_file'=>'mk29E_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>136,
'meter_model'=>'mk10_cli_timeout.cfg',
'config_file'=>'mk10_cli_timeout.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>135,
'meter_model'=>'mk10_cli_nopar.cfg',
'config_file'=>'mk10_cli_nopar.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>55,
'meter_model'=>'mk10_cli.cfg',
'config_file'=>'mk10_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>27,
'meter_model'=>'mk10_9600',
'config_file'=>'mk10_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>26,
'meter_model'=>'mk10_2400',
'config_file'=>'mk10_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>137,
'meter_model'=>'mk10A_cli.cfg',
'config_file'=>'mk10A_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>1,
'meter_model'=>'kv2c_serial',
'config_file'=>'kv2c_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>24,
'meter_model'=>'kv2c_optical',
'config_file'=>'kv2c_optical.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>139,
'meter_model'=>'kv2c_opti485_s2.cfg',
'config_file'=>'kv2c_opti485_s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>140,
'meter_model'=>'kv2c_opti485_s1.cfg',
'config_file'=>'kv2c_opti485_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>129,
'meter_model'=>'kv2c_opti485_pwd.cfg',
'config_file'=>'kv2c_opti485_pwd.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>47,
'meter_model'=>'kv2c_opti485s1PWD',
'config_file'=>'kv2c_opti485s1PWD.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>46,
'meter_model'=>'kv2c_opti485s1NP',
'config_file'=>'kv2c_opti485s1NP.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>113,
'meter_model'=>'kv2c_opti485.cfg',
'config_file'=>'kv2c_opti485.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>9,
'meter_model'=>'iecTCP',
'config_file'=>'iecTCP.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>8,
'meter_model'=>'iec',
'config_file'=>'iec.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>128,
'meter_model'=>'i210_plus.cfg',
'config_file'=>'i210_plus.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>39,
'meter_model'=>'em3490.cfg',
'config_file'=>'em3490.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>141,
'meter_model'=>'elnet.cfg',
'config_file'=>'elnet.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>11,
'meter_model'=>'dlt645serial.cfg',
'config_file'=>'dlt645serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>10,
'meter_model'=>'mk31 RF',
'config_file'=>'dlt645RF.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>58,
'meter_model'=>'ch_trans_sn.cfg',
'config_file'=>'ch_trans_sn.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>38,
'meter_model'=>'ch_trans.cfg',
'config_file'=>'ch_trans.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>44,
'meter_model'=>'ch_meter_s1.cfg',
'config_file'=>'ch_meter_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>111,
'meter_model'=>'ch_meter_pm835.cfg',
'config_file'=>'ch_meter_pm835.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>134,
'meter_model'=>'ch_meter_lora.cfg',
'config_file'=>'ch_meter_lora.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>52,
'meter_model'=>'ch_meter_fe.cfg',
'config_file'=>'ch_meter_fe.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>34,
'meter_model'=>'ch_meter_9600lora.cfg',
'config_file'=>'ch_meter_9600lora.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>32,
'meter_model'=>'ch_meter_9600.cfg',
'config_file'=>'ch_meter_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>112,
'meter_model'=>'ch_meter_4800.cfg',
'config_file'=>'ch_meter_4800.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>43,
'meter_model'=>'ch meter 2400 s1',
'config_file'=>'ch_meter_2400_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>126,
'meter_model'=>'ch_meter_2400_s1.cfg',
'config_file'=>'ch_meter_2400_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>31,
'meter_model'=>'ch_meter_2400.cfg',
'config_file'=>'ch_meter_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>45,
'meter_model'=>'ch_meter_1200_s1.cfg',
'config_file'=>'ch_meter_1200_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>51,
'meter_model'=>'ch_meter_1200par.cfg',
'config_file'=>'ch_meter_1200par.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>33,
'meter_model'=>'ch_meter_1200.cfg',
'config_file'=>'ch_meter_1200.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>28,
'meter_model'=>'ch_meter.cfg',
'config_file'=>'ch_meter.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>50,
'meter_model'=>'ch_fe13.cfg',
'config_file'=>'ch_fe13.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>19,
'meter_model'=>'cedc_zmd402.cfg',
'config_file'=>'cedc_zmd402.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>54,
'meter_model'=>'c2000_protocol25.cfg',
'config_file'=>'c2000_protocol25.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>40,
'meter_model'=>'c2000_np.cfg',
'config_file'=>'c2000_np.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>115,
'meter_model'=>'c2000_7e1_9600.cfg',
'config_file'=>'c2000_7e1_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>49,
'meter_model'=>'c2000_7e1_300s2.cfg',
'config_file'=>'c2000_7e1_300s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>48,
'meter_model'=>'c2000_7e1_300s1.cfg',
'config_file'=>'c2000_7e1_300s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>30,
'meter_model'=>'c2000_7e1_300.cfg',
'config_file'=>'c2000_7e1_300.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>29,
'meter_model'=>'c2000_300.cfg',
'config_file'=>'c2000_300.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>42,
'meter_model'=>'c2000_2ecom.cfg',
'config_file'=>'c2000_2ecom.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>3,
'meter_model'=>'c2000.cfg',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>4,
'meter_model'=>'P2000-D',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>5,
'meter_model'=>'P2000-T',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>56,
'meter_model'=>'abb_tcp_57.cfg',
'config_file'=>'abb_tcp_57.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>57,
'meter_model'=>'abb_tcp_53.cfg',
'config_file'=>'abb_tcp_53.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>119,
'meter_model'=>'abb_tcp_121.cfg',
'config_file'=>'abb_tcp_121.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>120,
'meter_model'=>'abb_tcp_119.cfg',
'config_file'=>'abb_tcp_119.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>121,
'meter_model'=>'abb_tcp_118.cfg',
'config_file'=>'abb_tcp_118.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>122,
'meter_model'=>'abb_tcp_117.cfg',
'config_file'=>'abb_tcp_117.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>124,
'meter_model'=>'abb_tcp_116.cfg',
'config_file'=>'abb_tcp_116.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>123,
'meter_model'=>'abb_tcp_115.cfg',
'config_file'=>'abb_tcp_115.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>131,
'meter_model'=>'abb_tcp87.cfg',
'config_file'=>'abb_tcp87.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>116,
'meter_model'=>'abb_tcp83.cfg',
'config_file'=>'abb_tcp83.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>100,
'meter_model'=>'abb_tcp81.cfg',
'config_file'=>'abb_tcp81.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>108,
'meter_model'=>'abb_tcp79.cfg',
'config_file'=>'abb_tcp79.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>107,
'meter_model'=>'abb_tcp78.cfg',
'config_file'=>'abb_tcp78.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>106,
'meter_model'=>'abb_tcp77.cfg',
'config_file'=>'abb_tcp77.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>117,
'meter_model'=>'abb_tcp74.cfg',
'config_file'=>'abb_tcp74.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>105,
'meter_model'=>'abb_tcp70.cfg',
'config_file'=>'abb_tcp70.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>103,
'meter_model'=>'abb_tcp68.cfg',
'config_file'=>'abb_tcp68.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>102,
'meter_model'=>'abb_tcp67.cfg',
'config_file'=>'abb_tcp67.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>104,
'meter_model'=>'abb_tcp54.cfg',
'config_file'=>'abb_tcp54.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>118,
'meter_model'=>'abb_tcp52.cfg',
'config_file'=>'abb_tcp52.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>101,
'meter_model'=>'abb_tcp51.cfg',
'config_file'=>'abb_tcp51.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>99,
'meter_model'=>'abb_tcp50.cfg',
'config_file'=>'abb_tcp50.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>98,
'meter_model'=>'abb_tcp49.cfg',
'config_file'=>'abb_tcp49.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>97,
'meter_model'=>'abb_tcp48.cfg',
'config_file'=>'abb_tcp48.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>96,
'meter_model'=>'abb_tcp47.cfg',
'config_file'=>'abb_tcp47.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>95,
'meter_model'=>'abb_tcp46.cfg',
'config_file'=>'abb_tcp46.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>94,
'meter_model'=>'abb_tcp45.cfg',
'config_file'=>'abb_tcp45.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>93,
'meter_model'=>'abb_tcp44.cfg',
'config_file'=>'abb_tcp44.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>92,
'meter_model'=>'abb_tcp43.cfg',
'config_file'=>'abb_tcp43.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>91,
'meter_model'=>'abb_tcp42.cfg',
'config_file'=>'abb_tcp42.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>90,
'meter_model'=>'abb_tcp41.cfg',
'config_file'=>'abb_tcp41.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>89,
'meter_model'=>'abb_tcp40.cfg',
'config_file'=>'abb_tcp40.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>88,
'meter_model'=>'abb_tcp39.cfg',
'config_file'=>'abb_tcp39.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>87,
'meter_model'=>'abb_tcp38.cfg',
'config_file'=>'abb_tcp38.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>86,
'meter_model'=>'abb_tcp37.cfg',
'config_file'=>'abb_tcp37.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>85,
'meter_model'=>'abb_tcp36.cfg',
'config_file'=>'abb_tcp36.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>84,
'meter_model'=>'abb_tcp35.cfg',
'config_file'=>'abb_tcp35.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>83,
'meter_model'=>'abb_tcp34.cfg',
'config_file'=>'abb_tcp34.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>82,
'meter_model'=>'abb_tcp33.cfg',
'config_file'=>'abb_tcp33.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>81,
'meter_model'=>'abb_tcp32.cfg',
'config_file'=>'abb_tcp32.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>80,
'meter_model'=>'abb_tcp31.cfg',
'config_file'=>'abb_tcp31.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>79,
'meter_model'=>'abb_tcp30.cfg',
'config_file'=>'abb_tcp30.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>78,
'meter_model'=>'abb_tcp29.cfg',
'config_file'=>'abb_tcp29.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>77,
'meter_model'=>'abb_tcp28.cfg',
'config_file'=>'abb_tcp28.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>76,
'meter_model'=>'abb_tcp27.cfg',
'config_file'=>'abb_tcp27.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>75,
'meter_model'=>'abb_tcp26.cfg',
'config_file'=>'abb_tcp26.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>74,
'meter_model'=>'abb_tcp25.cfg',
'config_file'=>'abb_tcp25.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>73,
'meter_model'=>'abb_tcp24.cfg',
'config_file'=>'abb_tcp24.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>72,
'meter_model'=>'abb_tcp23.cfg',
'config_file'=>'abb_tcp23.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>71,
'meter_model'=>'abb_tcp22.cfg',
'config_file'=>'abb_tcp22.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>70,
'meter_model'=>'abb_tcp21.cfg',
'config_file'=>'abb_tcp21.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>69,
'meter_model'=>'abb_tcp20.cfg',
'config_file'=>'abb_tcp20.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>59,
'meter_model'=>'abb_tcp19.cfg',
'config_file'=>'abb_tcp19.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>67,
'meter_model'=>'abb_tcp18.cfg',
'config_file'=>'abb_tcp18.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>66,
'meter_model'=>'abb_tcp17.cfg',
'config_file'=>'abb_tcp17.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>65,
'meter_model'=>'abb_tcp16.cfg',
'config_file'=>'abb_tcp16.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>64,
'meter_model'=>'abb_tcp15.cfg',
'config_file'=>'abb_tcp15.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>63,
'meter_model'=>'abb_tcp14.cfg',
'config_file'=>'abb_tcp14.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>62,
'meter_model'=>'abb_tcp13.cfg',
'config_file'=>'abb_tcp13.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>61,
'meter_model'=>'abb_tcp12.cfg',
'config_file'=>'abb_tcp12.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>60,
'meter_model'=>'abb_tcp11.cfg',
'config_file'=>'abb_tcp11.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


    }
}
