<div class="panel panel-default">
<div class="panel-heading">ศูนย์สารสนเทศที่ดิน</div>
    <div class="panel-body pre-scrollable" style="max-height: 157px;">
        <ul id="serverRoom" @if(isset($serverRoom)) class="bg-success" @endif><strong><a href="{{url('/serverRoom#serverRoom')}}">1 Server Room</a></strong></ul>
        <ul id="networkRoom" @if(isset($networkRoom)) class="bg-success" @endif><strong><a href="{{url('/networkRoom#networkRoom')}}">2 Network Room</a></strong></ul>
        <ul id="backupRoom" @if(isset($backupRoom)) class="bg-success" @endif><strong><a href="{{url('/backupRoom#backupRoom')}}">3 Backup Room</a></strong></ul>
        <ul id="controlRoom" @if(isset($controlRoom)) class="bg-success" @endif><strong><a href="{{url('/controlRoom#controlRoom')}}">4 Control Room</a></strong></ul>
        <ul id="airControlRoom" @if(isset($airControlRoom)) class="bg-success" @endif><strong><a href="{{url('/airControlRoom#airControlRoom')}}">5 Air Control Room</a></strong></ul>
        <ul id="upsRoom" @if(isset($upsRoom)) class="bg-success" @endif><strong><a href="{{url('/upsRoom#upsRoom')}}">6 UPS Room</a></strong></ul>
        <ul id="fm200" @if(isset($fm200)) class="bg-success" @endif><strong><a href="{{url('/fm200#fm200')}}">7 Fire Extinguishers</a></strong></ul>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-heading">รายการบำรุงรักษาระบบสนับสนุนการทำงานของศูนย์สารสนเทศที่ดิน</div>
    <div class="panel-body pre-scrollable" style="max-height: 215px;">
        <ul id="surgeProtection" @if(isset($surgeProtection)) class="bg-success" @endif><strong><a href="{{url('/surgeProtection#surgeProtection')}}">1 ระบบป้องกันฟ้าผ่า Surge Protection</a></strong></ul>
        <ul id="electricSystem" @if(isset($electricSystem)) class="bg-success" @endif><strong><a href="{{url('/electricSystem#electricSystem')}}">2 ระบบไฟฟ้าและอุปกรณ์</a></strong>
            <li style="margin-left: 10%;"><a href="#">ตู้เมนไฟฟ้า (MDB), EMDB, UDB-A</a></li>
            <li style="margin-left: 10%;"><a href="#">ตู้เมนไฟฟ้า UDB-B, UDB-30kVA</a></li>
            <li style="margin-left: 10%;"><a href="#">ชุดแผงจ่ายไฟฟ้าย่อย, วงจรย่อยเต้ารับไฟฟ้า</a></li>
            <li style="margin-left: 10%;"><a href="#">ชุดรางไฟฟ้าภายในตู้</a></li>
            <li style="margin-left: 10%;"><a href="#">ไฟฟ้าแสงสว่างภายในศูนย์</a></li>
            <li style="margin-left: 10%;"><a href="#">Source Transfer Switch (Multi Switch)</a></li>
            <li style="margin-left: 10%;"><a href="#">สวิตช์สับถ่ายอัตโนมัติ (ATS) ชนิด 3 ขั้ว ขนาด 630 A</a></li>
        </ul>
        <ul><strong><a href="#">3 ระบบเครื่องกำเหนิดไฟฟ้าและอุปกรณ์</a></strong>
            <li style="margin-left: 10%;"><a href="#">ขนาด 500 kVA</a></li>
        </ul>
        <ul><strong><a href="#">4 ระบบสำรองไฟฟ้า (UPS)</a></strong>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 160 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 30 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 30 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 20 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 5 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 3 kVA พร้อมแบตเตอรี่</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดพิกัดกำลัง 3 kVA พร้อมแบตเตอรี่</a></li>
        </ul>
        <ul><strong><a href="#">5 ระบบปรับอากาศแบบ Split type</a></strong>
            <li style="margin-left: 10%;"><a href="#">ขนาดทำความเย็นไม่น้อยกว่า 40,000 BTU</a></li>
        </ul>
        <ul><strong><a href="#">6 ระบบปรับอากาศแบบควบคุมความชื้น</a></strong>
            <li style="margin-left: 10%;"><a href="#">ขนาดทำความเย็นไม่น้อยกว่า 200,000 BTU</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดทำความเย็นไม่น้อยกว่า 180,000 BTU</a></li>
            <li style="margin-left: 10%;"><a href="#">ขนาดทำความเย็นไม่น้อยกว่า 100,000 BTU</a></li>
            <li style="margin-left: 10%;"><a href="#">ปั๊มน้ำอัตโนมัติสำหรับระบายน้ำทิ้งของเครื่องปรับอากาศ</a></li>
        </ul>
        <ul><strong><a href="#">7 ระบบตรวจจับและแจ้งเตือนการรั่วซึมของน้ำ</a></strong>
            <li style="margin-left: 10%;"><a href="#">Waterleak Detection System</a></li>
            <li style="margin-left: 10%;"><a href="#">สายตรวจจับการรั่วซึมของน้ำและอุปกรณ์</a></li>
        </ul>
        <ul><strong><a href="#">8 ระบบควบคุมการเข้า-ออก ประตูอัตโนมัติ</a></strong>
            <li style="margin-left: 10%;"><a href="#">ชุดควบคุมการเข้า-ออกประตูอัตโนมัติ และบัตร Proximity Card จำนวน 50 ใบ</a></li>
        </ul>
        <ul><strong><a href="#">9 ระบบดับเพลิงอัตโนมัติด้วยก๊าซสะอาด</a></strong>
            <li style="margin-left: 10%;"><a href="#">Fire Control System พร้อมก๊าซสะอาด ติดตั้งที่ห้องศูนย์สารสนเทศที่ดิน</a></li>
            <li style="margin-left: 10%;"><a href="#">Fire Control System พร้อมก๊าซสะอาด ติดตั้งที่ห้อง UPS</a></li>
        </ul>
        <ul><strong><a href="#">10 ระบบเฝ้าดูแลแจ้งเตือนความผิดปกติของสภาวะแวดล้อมอัตโนมัติ</a></strong>
            <li style="margin-left: 10%;"><a href="#">Telealarm, WAB IO และสายสัญญาณแจ้งเตือนสภาวะแวดล้อมอัตโนมัติ</a></li>
        </ul>
        <ul><strong><a href="#">11 ระบบกล้องโทรทัศน์วงจรปิด</a></strong>
            <li style="margin-left: 10%;"><a href="#">IP Fixed Dome Camera</a></li>
            <li style="margin-left: 10%;"><a href="#">IP Fixed Dome Camera</a></li>
            <li style="margin-left: 10%;"><a href="#">จอภาพ LCD 42 นิ้ว</a></li>
            <li style="margin-left: 10%;"><a href="#">Network Video Recorder</a></li>
            <li style="margin-left: 10%;"><a href="#">หน่วยความจำสำรอง Storage (1TBx12)</a></li>
        </ul>
        <ul><strong><a href="#">12 ระบบสายสัญญาณและอุปกรณ์เครือข่ายคอมพิวเตอร์</a></strong>
            <li style="margin-left: 10%;"><a href="#">อุปกรณ์ Core Switch Layer3</a></li>
            <li style="margin-left: 10%;"><a href="#">อุปกรณ์ Switch 24 Port Layer2</a></li>
            <li style="margin-left: 10%;"><a href="#">LCD 19'' Monitor</a></li>
            <li style="margin-left: 10%;"><a href="#">Switch</a></li>
            <li style="margin-left: 10%;"><a href="#">NoteBook</a></li>
        </ul>
        <ul><strong><a href="#">13 ระบบ KVM</a></strong>
            <li style="margin-left: 10%;"><a href="#">KVM SWITCH</a></li>
            <li style="margin-left: 10%;"><a href="#">KVM SWITCH PS/2 CONSOL</a></li>
            <li style="margin-left: 10%;"><a href="#">SUN LEGACY KVM ADAPTER</a></li>
            <li style="margin-left: 10%;"><a href="#">KVM ADAPTER MODULE</a></li>
            <li style="margin-left: 10%;"><a href="#">จอภาพ LCD 42 นิ้ว</a></li>
        </ul>
        <ul><strong><a href="#">14 ระบบไฟฟ้าฉุกเฉิน</a></strong>
            <li style="margin-left: 10%;"><a href="#">โคมไฟฟ้าฉุกเฉิน ขนาด 2x55W</a></li>
        </ul>
    </div>
</div>
