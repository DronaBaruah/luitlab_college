@extends('frontend.layouts.app')

@section('title', 'Fee Details | Pub Kamrup College')

@section('content')
<br>    
<div class="container">
        <h3 class="text-center text-light bg-primary py-2" style="border-radius:20px;">
            Details Of College fee for the Academic Session : 2019-20
        </h3>
        <br>
        <h4>
            <strong><font color="red">*Admission fees may be change at anytime as per Assam Govt direction.</font></strong>
        </h4>
        <h4><strong>Course : HS (Arts & Science) for Rural Areas</strong><i class="fa fa-chevron-down float-right hs"
                aria-hidden="true"></i>
        </h4>
        <hr>
        <div id="hs" style="display:none;">
            <h5 class="text-center text-danger">FEE STRUCTURE FOR 2019-20</h5><br>
            <h6><strong>Notes On Fee Structure</strong></h6>
            <ol type="i" style="line-height:2;font-size:18px;letter-spacing:1px;">
                <li>Payment of admission fee will purely be in digital mode.</li>
                <li>Additional expenditure incurred in subject related extension programmes will have to be borne
                    by concerned student</li>
                <li>Fee except the caution money once paid is not refundable.</li>
                <li>Girl students of the HS classes are exempted from the Tuition Fee.</li>
            </ol>
            <hr>
            <h5 class="text-center text-danger">Scheme for Waiver of Admission Fee for students taking admission in HS</h5><br>
            <p style="font-size:15px; text-align:justify;letter-spacing:1px;line-height:2;">
            “Students seeking admission into 1st year will plant a sapling at his/ her College or at his/ her
home and shall give photograph of the same to the college. The Student has to nurse the sapling and
while seeking admission into second year shall give photograph of the same tree that was planted
during previous year.”<br>
Students getting admission under the Scheme for Waiver of Admission Fee waived have to
submit an undertaking in a prescribed form provided by the College at the time of admission.
            </p>
            <table class="table table-bordered table-responsive-sm text-center hide">
                <tr>
                    <th>Sl. No</th>
                    <th>Particulars</th>
                    <th>Arts (Rs.)</th>
                    <th>Science (Rs.)</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Admission Fee</td>
                    <td>400</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td><span class="text-danger">*</span>2</td>
                    <td>Tuition Fees (Annual)</td>
                    <td>Girls - Nil<br>Boys - 600</td>
                    <td>Girls - Nil<br>Boys - 720</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Laboratory Fee</td>
                    <td>100 (Pract.)</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Identity Card & Badge Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Establishment Fee</td>
                    <td>700</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Contingency</td>
                    <td>800</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Registration Fee as Council</td>
                    <td>75</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Enrolment Fee</td>
                    <td>25</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Library Caution Money (Refundable)</td>
                    <td>300</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Library Fee</td>
                    <td>200</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>College Examination Fee</td>
                    <td>120</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>College Development Fee</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Electricity Fee</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>N.C.C & N.S.S</td>
                    <td>20</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Student's Welfare Fee</td>
                    <td>50</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Student's Union Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Magazine Fee</td>
                    <td>150</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Games & Sports Fee</td>
                    <td>200</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Festival Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Co. Curricular activities</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>ICT</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Swachh College Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Misc</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>5440 /-</td>
                    <td>5760 /-</td>
                </tr>
            </table><br><br>
            <div class="border-lef border-danger py-1 px-1">
                <h6 class="text-danger">
                    N.B. * As per Assam Govt. Notification, 2018<br><br>
                    (The fees structure may be changed as per Govt.
                    notification without prior information)
                </h6>
            </div><br><br>
        </div>
        <h4><strong>Course : TDC (Arts & Science) for Rural Areas <span class="text-danger">*</span></strong><i
                class="fa fa-chevron-down float-right tdc" aria-hidden="true"></i></h4>
        <hr>
        <div id="tdc" style="display:none;">
            <table class="table table-bordered table-responsive-sm text-center">
                <tr>
                    <th>Sl. No</th>
                    <th>Particulars</th>
                    <th>Arts (Rs.)</th>
                    <th>Science (Rs.)</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Admission Fee</td>
                    <td>400</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tuition Fees (Annual)</td>
                    <td>Girls - 720<br>Boys - 840</td>
                    <td>Girls - 840<br>Boys - 1020</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Laboratory Fee</td>
                    <td>200 (Pract.)</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Identity Card & Badge Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Establishment Fee</td>
                    <td>700</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Contingency</td>
                    <td>800</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td><span class="text-danger">**</span>7</td>
                    <td>Registration Fee as University</td>
                    <td>400</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Enrolment Fee</td>
                    <td>220</td>
                    <td>220</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Library Caution Money (Refundable)</td>
                    <td>300</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Library Fee</td>
                    <td>200</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>College Examination Fee</td>
                    <td>300</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>College Development Fee</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Electricity Fee</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>N.C.C & N.S.S</td>
                    <td>50</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Student's Welfare Fee</td>
                    <td>50</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Student's Union Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Magazine Fee</td>
                    <td>150</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Games & Sports Fee</td>
                    <td>200</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Festival Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Co. Curricular activities</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>ICT</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Swachh College Fee</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Misc</td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>6290 /- (Girls) <br>
                        6510 /- (Boys)</td>
                    <td>7810 /- (Girls)<br>
                        7990/- (Boys)</td>
                </tr>
            </table><br><br>
            <div class="border-lef border-danger py-1 px-1">
                <h6 class="text-danger">
                    N.B. * As per Assam Govt. Notification, 2018<br><br>
                    (The fees structure may be changed as per Govt.
                    notification without prior information)
                </h6>
            </div><br><br>
        </div>
        <h4><strong>Fees Structure : BVoc, 2019-20</strong><i class="fa fa-chevron-down float-right bvoc"
                aria-hidden="true"></i></h4>
        <hr>
        <div id="bvoc" style="display:none;">
            <table class="table table-bordered table-responsive-sm text-center">
                <tr>
                    <th>For Semester 1</th>
                    <th>Admission Fee</th>
                    <th>Semester Enrolment Fee</th>
                    <th>Caution Money <span class="text-danger">*</span></th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>BVoc in Food Processing & Quality Management</td>
                    <td>2000/-</td>
                    <td>7000/-</td>
                    <td>3000/-</td>
                    <td>12000/-</td>
                </tr>
                <tr>
                    <td>BVoc in Software Development & System Administration</td>
                    <td>2000/-</td>
                    <td>7000/-</td>
                    <td>3000/-</td>
                    <td>12000/-</td>
                </tr>
                <tr>
                    <td class="text-danger text-center" colspan=5>Subsequent Semesters (per semester basis)</td>
                </tr>
                <tr>
                    <td>BVoc in Food Processing & Quality Management</td>
                    <td></td>
                    <td>7000/-</td>
                    <td></td>
                    <td>7000/-</td>
                </tr>
                <tr>
                    <td>BVoc in Software Development & System Administration</td>
                    <td></td>
                    <td>7000/-</td>
                    <td></td>
                    <td>7000/-</td>
                </tr>
            </table><br><br>
            <div class="border-lef border-danger py-1 px-1">
                <h6 class="text-danger">
                    * The Caution Fee of Rs. 3000/- will be refunded
                    to the admitted students on successful completion
                    of their respective courses.
                </h6>
            </div><br><br>
        </div>
        <h4><strong>Fees Structure for Add-on Courses</strong><i class="fa fa-chevron-down float-right add"
                aria-hidden="true"></i></h4>
        <hr>
        <div id="add" style="display:none;">
            <table class="table table-bordered table-responsive-sm text-center">
                <tr>
                    <th>ADMLT</th>
                    <th>CCMLT</th>
                    <th>DTTM</th>
                </tr>
                <tr>
                    <td>Rs. 15000/-</td>
                    <td>Rs. 7500/-</td>
                    <td>Rs. 4000/-</td>
                </tr>
            </table><br><br>
            <div class="border-lef border-danger py-1 px-1">
                <h6 class="text-danger">
                    * Total Fees determined for the courses may be deposited
                    on installment basis.<br>
                    * Fees for the other Diploma & Certificate Courses
                    will be declared in due course of time
                </h6>
            </div><br><br>
        </div>
    </div>

@endsection