<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "setHead.php"; ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php //require_once "menuSidebar.php"; 
        ?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php require_once "menuTop.php"; $student_id = $_SESSION["student_id"]?>
            <!-- Page content-->
            <div class="container-fluid">
                <div id="login">
                    <h3 class="text-center text-white pt-5">Login form</h3>
                    <div class="container">
                        <div class="card">
                            <div class="card-body p-3">
                                <h5>ภาคผนวกที่ 4 เอกสารแสดงความประสงค์ของผู้ปกครองเพื่อให้นักเรียน/นักศึกษาชั้น
                                    มัธยมศึกษาปีที่ 1-6 หรือเทียบเท่า ฉีดวัคซีนไฟเซอร์</h5>
                                <div class="row bg-primary p-1">
                                    <div class="col-md-2">
                                        <img src="img/Public_Health_of_Thailand.png" alt="" width="84" height="84">
                                    </div>
                                    <div class="col-md-10 ">
                                        <div class="font-head-doc">เอกสารแสดงความประสงค์ของผู้ปกครองให้นักเรียน/นักศึกษาฉีดวัคซีนไฟเซอร์</div>
                                    </div>
                                </div>
                                <div class="row  mt-3">
                                    <div class="col-md-5 bg-head-doc rounded h5"> ส่วนที่ 1 : ข้อควรรู้เกี่ยวกับโรคโควิด 19 และวัคซีนโควิด 19</div>
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;โรคโควิด 19 เกิดจากการติดเชื้อไวรัสโคโรนา 2019 ซึ่งการติดเชื้อในเด็กสามารถมีอาการได้หลากหลายตั้งแต่ไม่มี
                                    อาการเลย จนถึงปอดอักเสบรุนแรง หรือเสียชีวิต ร้อยละ 90 ของผู้ป่วยเด็กติดเชื้อมักมีอาการไม่รุนแรง โดยพบอาการเพียง
                                    เล็กน้อย เช่น ไข้ ไอ ปวดกล้ามเนื้อ และมีเพียงร้อยละ 5 ของผู้ป่วยเด็กติดเชื้อที่มีอาการรุนแรงหรือวิกฤติ เช่น ปอดอักเสบ
                                    รุนแรง ระบบหายใจหรือระบบไหลเวียนโลหิตล้มเหลว รวมถึงภาวะอักเสบหลายระบบในเด็ก ภาวะแทรกซ้อนมักพบในผู้ป่วย
                                    กลุ่มเสี่ยงสูง เช่น เด็กเล็กอายุน้อยกว่า 1 ปี ผู้ป่วยที่มีโรคประจำตัว เช่น โรคหัวใจและหลอดเลือด โรคไต โรคปอดเรื้อรัง
                                    หรือภาวะภูมิคุ้มกันบกพร่อง ในประเทศไทยพบว่าแม้จะมีการติดเชื้อในเด็กอายุน้อยกว่า 18 ปีในสัดส่วนที่สูงขึ้น แต่ผู้ป่วยเด็ก
                                    ที่ติดเชื้อโรคโควิด 19 ส่วนใหญ่มักมีอาการไม่รุนแรงและมีอัตราการเสียชีวิตน้อยมาก
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;วัคซีนมีประสิทธิภาพในการป้องกันการเจ็บป่วยจากโรคโควิด 19 ได้ในระดับสูง และสามารถช่วยลดความรุนแรงของ
                                    โรคได้ การฉีดวัคซีนอาจป้องกันโรคแบบไม่รุนแรงหรือไม่มีอาการไม่ได้ ดังนั้นผู้ที่ได้รับวัคซีนจึงยังอาจจะติดเชื้อไวรัสโคโรนา
                                    2019 ได้ จึงจำเป็นต้องปฏิบัติตามคำแนะนำและมาตรการอื่น ๆ ตามที่ศูนย์บริหารสถานการณ์แพร่ระบาดของโรคติดเชื้อไวรัสโคโร
                                    นา 2019คณะกรรมการโรคติดต่อจังหวัด/กรุงเทพมหานคร และกระทรวงสาธารณสุขกำหนด เช่น สวมหน้ากากอนามัย เว้น
                                    ระยะห่าง หมั่นล้างมือ ลงทะเบียนเมื่อเข้าไปยังสถานที่ เป็นต้น
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;สำหรับวัคซีนโควิด 19 ในขณะนี้ (ณ วันที่ 15 กันยายน 2564) ที่ได้รับการขึ้นทะเบียนกับสำนักงานคณะกรรมการ
                                    อาหารและยาของประเทศไทย ให้ใช้ในผู้ที่มีอายุ 12 ปีขึ้นไป มีเพียงชนิดเดียว ได้แก่ วัคซีนไฟเซอร์ (Pfizer Vaccine) และได้
                                    ผ่านการเห็นชอบให้ใช้วัคซีนดังกล่าวจากคณะอนุกรรมการสร้างเสริมภูมิคุ้มกันโรค โดยวัคซีนนี้เป็นวัคซีนชนิดเอ็มอาร์เอ็นเอ
                                    (mRNA vaccine) ของบริษัท ไฟเซอร์ไบโอเอ็นเทค (Pizer-BioNTech) ซึ่งเป็นวัคซีนที่มีประสิทธิภาพสูง สามารถป้องกันการ
                                    นอนโรงพยาบาลเนื่องจากป่วยหนักและเสียชีวิตได้ มีข้อบ่งชี้ในการให้วัคซีนในบุคคลอายุ 12 ปีขึ้นไป โดยฉีดเข้ากล้ามเนื้อ 2
                                    ครั้ง ห่างกัน 3 - 4 สัปดาห์ และมีข้อห้ามในการรับวัคซีนไฟเซอร์ได้แก่ บุคคลที่มีอาการแพ้อย่างรุนแรงในการฉีดวัคซีนเข็ม
                                    แรก บุคคลที่แพ้วัคซีนและสารที่เป็นส่วนประกอบของวัคซีนอย่างรุนแรง ผู้ที่มีอายุน้อยกว่า 12 ปี ผู้ที่มีความเจ็บป่วย
                                    เฉียบพลัน และหญิงตั้งครรภ์ที่มีอายุครรภ์น้อยกว่า 12 สัปดาห์
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;ผู้ที่มีความประสงค์รับวัคซีนไฟเซอร์ควรมีการเตรียมตัวก่อนรับวัคซีนไฟเซอร์ได้แก่ ปฏิบัติตัวตามปกติ พักผ่อนให้
                                    เพียงพอ ออกกำลังกายตามปกติ ทำจิตใจให้ไม่เครียดหรือวิตกกังวล หากเจ็บป่วยไม่สบายควรเลื่อนการฉีดออกไปก่อน ผู้ที่มี
                                    โรคประจำตัวต่าง ๆ สามารถรับวัคซีนได้ รับประทานยาประจำได้ตามปกติ ยกเว้นโรคที่มีความเสี่ยงที่อาจอันตรายถึงชีวิต โรค
                                    ที่ยังควบคุมไม่ได้ มีอาการกำเริบ หรืออาการยังไม่คงที่ เช่น โรคหัวใจและหลอดเลือด และโรคทางระบบประสาท เป็นต้น ในผู้
                                    ที่ไม่แน่ใจหรืออาการยังไม่คงที่ ควรให้แพทย์ผู้ดูแลเป็นประจำประเมินก่อนฉีด และการมีประจำเดือนไม่เป็นข้อห้ามในการฉีด
                                    วัคซีน
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;จากการศึกษาผลข้างเคียงของการฉีดวัคซีนไฟเซอร์ในเด็กและวัยรุ่น พบว่ามีความปลอดภัยสูง ไม่แตกต่างกับการฉีด
                                    ในประชากรกลุ่มอายุอื่นๆ โดยผลข้างเคียงที่พบบ่อย ได้แก่ เจ็บในตำแหน่งที่ฉีด อ่อนเพลีย ปวดศีรษะหรือมีไข้มักพบ
                                    ผลข้างเคียงหลังการฉีดวัคซีนเข็มที่สองมากกว่าหลังการฉีดเข็มแรกเล็กน้อย ส่วนมากอาการไม่รุนแรงและหายไปได้เองใน 1-2
                                    วัน หากพบอาการดังกล่าว แนะนำให้รับประทานยาพาราเซทตามอล และควรงดออกกำลังกายหลังได้รับวัคซีนนาน 1 สัปดาห์
                                    แม้ว่าวัคซีนเหล่านี้จะได้รับการรับรองจากสำนักงานคณะกรรมการอาหารและยา ว่ามีความปลอดภัยและให้ใช้ได้แล้วก็ตาม แต่
                                    การฉีดวัคซีนนี้ก็ยังสามารถทำให้เกิดอาการแพ้รุนแรง (anaphylaxis) ซึ่งเป็นปฏิกิริยาภูมิแพ้แบบฉับพลัน โดยมากมักเกิด
                                    ภายใน 5-30 นาทีหลังจากฉีดวัคซีน อาการแพ้รุนแรงมักมีอาการทั่วร่างกายหรือมีอาการแสดงหลายระบบ เช่น หอบเหนื่อย
                                    หลอดลมตีบ หมดสติ ความดันโลหิตต่ำ ผื่นลมพิษ ปากบวม หน้าบวม คลื่นไส้ อาเจียน หรืออาจมีความรุนแรงถึงชีวิต จึง
                                    จำเป็นต้องสังเกตอาการหลังการฉีดอย่างน้อย 30 นาทีในสถานพยาบาลหรือสถานที่ฉีดวัคซีนเสมอ
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;จากข้อมูลของศูนย์ควบคุมและป้องกันโรค ประเทศสหรัฐอเมริกา (US CDC) ณ วันที่ 11 มิถุนายน 2564 พบรายงาน
                                    การเกิดภาวะกล้ามเนื้อหัวใจอักเสบ หรือ เยื่อหุ้มหัวใจอักเสบภายหลังการฉีดวัคซีนชนิดเอ็มอาร์เอ็นเอ ในผู้ที่มีอายุ 12-17 ปี
                                    ได้โดยพบอาการดังกล่าวหลังฉีดเข็มที่สองมากกว่าเข็มที่ 1 และมักพบในเพศชาย (ประมาณ 66.7 รายจากการฉีดวัคซีน 1
                                    ล้านโดส) และเพศหญิง (ประมาณ 9.1 รายจากการฉีดวัคซีน 1 ล้านโดส) โดยอาการที่พบ เช่น การเจ็บหน้าอก หายใจไม่อิ่ม
                                    หรือ ใจสั่น อย่างไรก็ตาม จากการติดตามผู้ที่ได้รับการวินิจฉัยภาวะกล้ามเนื้อหัวใจอักเสบ หรือ เยื่อหุ้มหัวใจอักเสบในระยะสั้น
                                    พบว่า ส่วนใหญ่สามารถกลับมาใช้ชีวิตเป็นปกติได้ภายหลังการรักษา
                                </div>
                                <div>
                                    &emsp;&emsp;&emsp;หากผู้รับวัคซีนเกิดอาการไม่พึงประสงค์หรือไม่มั่นใจว่าอาการดังกล่าวเกิดจากวัคซีนหรือไม่ ควรแนะนำให้ผู้ปกครอง/
                                    ผู้รับวัคซีนปรึกษาแพทย์เพิ่มเติม โดยเฉพาะอย่างยิ่งหากมีอาการไม่พึงประสงค์ที่รุนแรงและเกิดขึ้นในช่วง 4 สัปดาห์หลังฉีด
                                    วัคซีน และหากฉีดวัคซีนแล้วมีปฏิกิริยาแพ้รุนแรง เช่น มีผื่นทั้งตัว หน้าบวม คอบวม หายใจลำบาก ใจสั่น วิงเวียนหรืออ่อน
                                    แรง หรือมีอาการแขนขาอ่อนแรง รวมถึงหากมีอาการเจ็บแน่นหน้าอก หายใจเหนื่อย หรือหายใจไม่อิ่ม ใจสั่น ซึ่งเป็นอาการที่
                                    สงสัยภาวะกล้ามเนื้อหัวใจอักเสบ/เยื่อหุ้มหัวใจอักเสบ ควรรีบไปพบแพทย์หรือโทร 1669 เพื่อรับบริการทางการแพทย์ฉุกเฉิน
                                </div>
                                <hr>
                                <div class="d-flex flex-row-reverse">
                                    <a href="conInject2.php?student_id=<?php echo $student_id;?>"><button class="btn btn-primary">ไปยังส่วนถัดไป </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php require_once "setFoot.php"; ?>