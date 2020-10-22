<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\unit;
class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->char('name_unit',100);
            $table->char('type',50);
            $table->timestamps();
        });
        $units = array(
            ['name_unit' => 'หน่วยบริหารสำนักงาน', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยนโยบายและแผน/CSR', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยบุคคลและการจัดการความรู้', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยงบประมาณ พัสดุและการเงิน', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยการศึกษาระดับแพทยศาสตร์บัณฑิต', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยการศึกษาระดับหลังปริญญา', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยวิจัยและบริการวิชาการ', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยบริการและพัฒนาคุณภาพ', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยเวชสารสนเทศ', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยเวชระเบียน', 'type' => 'สำนักงาน'],
            ['name_unit' => 'หน่วยวิเทศสัมพันธ์', 'type' => 'สำนักงาน'],
            ['name_unit' => 'สาขาวิชาการบริบาลผู้ป่วยนอก', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาความดันโลหิตสูง', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชามะเร็งวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาต่อมไร้ท่อและเมตะบอลิสม', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโรคติดเชื้อและอายุรศาสตร์เขตร้อน', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาประสาทวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโภชนาการคลินิก', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโรคข้อและรูมาติสซั่ม', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโรคภูมิแพ้และอิมมูโนวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโรคระบบการหายใจและวัณโรค', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโรคระบบทางเดินอาหาร', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาโลหิตวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาวักกะวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาเวชบำบัดวิกฤต', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาเวชพันธุศาสตร์', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาหทัยวิทยา', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'สาขาวิชาอายุรศาสตร์ปัจฉิมวัย', 'type' => 'สาขาวิชา'],
            ['name_unit' => 'หัวหน้าภาค', 'type' => 'ภาควิชาฯ'],
            ['name_unit' => 'อาจารย์แพทย์', 'type' => 'ภาควิชาฯ'],
            ['name_unit' => 'Resident/Fellow', 'type' => 'ภาควิชาฯ'],
            ['name_unit' => 'นักศึกษาแพทย์', 'type' => 'ภาควิชาฯ'],
            ['name_unit' => 'เลขานุการภาควิชาฯ', 'type' => 'ภาควิชาฯ'],
            ['name_unit' => 'หอผู้ป่วยนอก', 'type' => '-'],
            ['name_unit' => 'นอกภาควิชาฯ', 'type' => '-'],
            ['name_unit' => 'หน่วยUR', 'type' => '-']
        );
        foreach($units as $unit){
            unit::create($unit);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
