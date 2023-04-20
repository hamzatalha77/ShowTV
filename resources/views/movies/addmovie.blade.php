@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <!-- <input id="input-b1" name="image_movie" type="text" class="metro-input" data-browse-on-zone-click="true"> -->
        <div class="myform">
            <input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
            <div class="form-group">
                <label>Movie Name</label>
                <input type="text" name="movie_name" class="metro-input">
            </div>
            <div class="form-group">
                <label>Movie Image</label>
                <input type="text" name="image_movie" class="metro-input">
            </div>
            <div class="form-group">
                <label>Image poster</label>
                <input type="text" name="image_poster_movie" class="metro-input">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tags" data-role="taginput"  class="mt-4" data-random-color="true">
            </div>
            <div class="form-group">
                <label>Movie Category</label>
                <select data-role="select" name="categories_id[]" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Date Release</label>
                <select name="date_release" data-role="select">
                    <option value="1900">1900</option>
                    <option value="1901">1901</option>
                    <option value="1902">1902</option>
                    <option value="1903">1903</option>
                    <option value="1904">1904</option>
                    <option value="1905">1905</option>
                    <option value="1906">1906</option>
                    <option value="1907">1907</option>
                    <option value="1908">1908</option>
                    <option value="1909">1909</option>
                    <option value="1910">1910</option>
                    <option value="1911">1911</option>
                    <option value="1912">1912</option>
                    <option value="1913">1913</option>
                    <option value="1914">1914</option>
                    <option value="1915">1915</option>
                    <option value="1916">1916</option>
                    <option value="1917">1917</option>
                    <option value="1918">1918</option>
                    <option value="1919">1919</option>
                    <option value="1920">1920</option>
                    <option value="1921">1921</option>
                    <option value="1922">1922</option>
                    <option value="1923">1923</option>
                    <option value="1924">1924</option>
                    <option value="1925">1925</option>
                    <option value="1926">1926</option>
                    <option value="1927">1927</option>
                    <option value="1928">1928</option>
                    <option value="1929">1929</option>
                    <option value="1930">1930</option>
                    <option value="1931">1931</option>
                    <option value="1932">1932</option>
                    <option value="1933">1933</option>
                    <option value="1934">1934</option>
                    <option value="1935">1935</option>
                    <option value="1936">1936</option>
                    <option value="1937">1937</option>
                    <option value="1938">1938</option>
                    <option value="1939">1939</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" data-role="textarea" data-prepend="<span class='mif-leanpub'></span>"></textarea>
            </div>
            <div class="form-group">
                <label>Age Select</label>
                <select name="age_classification" data-role="select">
                    <option selected>Select Age Classification</option>
                    <option value="Rated G: General audiences – All ages admitted">Rated G: General audiences – All ages admitted</option>
                    <option value="Rated PG: Parental guidance suggested – Some material may not be suitable for children.">Rated PG: Parental guidance suggested – Some material may not be suitable for children.</option>
                    <option value="Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.">Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.</option>
                    <option value="Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.">Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.</option>
                    <option value="Rated NC-17: Adults Only – No one 17 and under admitted.">Rated NC-17: Adults Only – No one 17 and under admitted.</option>
                </select>
            </div>
            <div class="form-group">
                <label>Country :</label>
                <select name="country" data-role="select">
                    <option value="" disabled selected>إختر</option>
                    <option value="أفغانستان">أفغانستان</option>
                    <option value="ألبانيا">ألبانيا</option>
                    <option value="الجزائر">الجزائر</option>
                    <option value="أندورا">أندورا</option>
                    <option value="أنغولا">أنغولا</option>
                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                    <option value="الأرجنتين">الأرجنتين</option>
                    <option value="أرمينيا">أرمينيا</option>
                    <option value="أستراليا">أستراليا</option>
                    <option value="النمسا">النمسا</option>
                    <option value="أذربيجان">أذربيجان</option>
                    <option value="البهاما">البهاما</option>
                    <option value="البحرين">البحرين</option>
                    <option value="بنغلاديش">بنغلاديش</option>
                    <option value="باربادوس">باربادوس</option>
                    <option value="بيلاروسيا">بيلاروسيا</option>
                    <option value="بلجيكا">بلجيكا</option>
                    <option value="بليز">بليز</option>
                    <option value="بنين">بنين</option>
                    <option value="بوتان">بوتان</option>
                    <option value="بوليفيا">بوليفيا</option>
                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                    <option value="بوتسوانا">بوتسوانا</option>
                    <option value="البرازيل">البرازيل</option>
                    <option value="بروناي">بروناي</option>
                    <option value="بلغاريا">بلغاريا</option>
                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                    <option value="بوروندي">بوروندي</option>
                    <option value="كمبوديا">كمبوديا</option>
                    <option value="الكاميرون">الكاميرون</option>
                    <option value="كندا">كندا</option>
                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                    <option value="تشاد">تشاد</option>
                    <option value="تشيلي">تشيلي</option>
                    <option value="الصين">الصين</option>
                    <option value="كولومبيا">كولومبيا</option>
                    <option value="جزر القمر">جزر القمر</option>
                    <option value="كوستاريكا">كوستاريكا</option>
                    <option value="ساحل العاج">ساحل العاج</option>
                    <option value="كرواتيا">كرواتيا</option>
                    <option value="كوبا">كوبا</option>
                    <option value="قبرص">قبرص</option>
                    <option value="التشيك">التشيك</option>
                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                    <option value="الدنمارك">الدنمارك</option>
                    <option value="جيبوتي">جيبوتي</option>
                    <option value="دومينيكا">دومينيكا</option>
                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                    <option value="الإكوادور">الإكوادور</option>
                    <option value="مصر">مصر</option>
                    <option value="السلفادور">السلفادور</option>
                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                    <option value="إريتريا">إريتريا</option>
                    <option value="إستونيا">إستونيا</option>
                    <option value="إثيوبيا">إثيوبيا</option>
                    <option value="فيجي">فيجي</option>
                    <option value="فنلندا">فنلندا</option>
                    <option value="فرنسا">فرنسا</option>
                    <option value="الغابون">الغابون</option>
                    <option value="غامبيا">غامبيا</option>
                    <option value="جورجيا">جورجيا</option>
                    <option value="ألمانيا">ألمانيا</option>
                    <option value="غانا">غانا</option>
                    <option value="اليونان">اليونان</option>
                    <option value="جرينادا">جرينادا</option>
                    <option value="غواتيمالا">غواتيمالا</option>
                    <option value="غينيا">غينيا</option>
                    <option value="غينيا بيساو">غينيا بيساو</option>
                    <option value="غويانا">غويانا</option>
                    <option value="هايتي">هايتي</option>
                    <option value="هندوراس">هندوراس</option>
                    <option value="المجر">المجر</option>
                    <option value="آيسلندا">آيسلندا</option>
                    <option value="الهند">الهند</option>
                    <option value="إندونيسيا">إندونيسيا</option>
                    <option value="إيران">إيران</option>
                    <option value="العراق">العراق</option>
                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                    <option value="فلسطين">فلسطين</option>
                    <option value="إيطاليا">إيطاليا</option>
                    <option value="جامايكا">جامايكا</option>
                    <option value="اليابان">اليابان</option>
                    <option value="الأردن">الأردن</option>
                    <option value="كازاخستان">كازاخستان</option>
                    <option value="كينيا">كينيا</option>
                    <option value="كيريباتي">كيريباتي</option>
                    <option value="الكويت">الكويت</option>
                    <option value="قرغيزستان">قرغيزستان</option>
                    <option value="لاوس">لاوس</option>
                    <option value="لاوس">لاوس</option>
                    <option value="لاتفيا">لاتفيا</option>
                    <option value="لبنان">لبنان</option>
                    <option value="ليسوتو">ليسوتو</option>
                    <option value="ليبيريا">ليبيريا</option>
                    <option value="ليبيا">ليبيا</option>
                    <option value="ليختنشتاين">ليختنشتاين</option>
                    <option value="ليتوانيا">ليتوانيا</option>
                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                    <option value="مدغشقر">مدغشقر</option>
                    <option value="مالاوي">مالاوي</option>
                    <option value="ماليزيا">ماليزيا</option>
                    <option value="جزر المالديف">جزر المالديف</option>
                    <option value="مالي">مالي</option>
                    <option value="مالطا">مالطا</option>
                    <option value="جزر مارشال">جزر مارشال</option>
                    <option value="موريتانيا">موريتانيا</option>
                    <option value="موريشيوس">موريشيوس</option>
                    <option value="المكسيك">المكسيك</option>
                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                    <option value="مولدوفا">مولدوفا</option>
                    <option value="موناكو">موناكو</option>
                    <option value="منغوليا">منغوليا</option>
                    <option value="الجبل الأسود">الجبل الأسود</option>
                    <option value="المغرب">المغرب</option>
                    <option value="موزمبيق">موزمبيق</option>
                    <option value="بورما">بورما</option>
                    <option value="ناميبيا">ناميبيا</option>
                    <option value="ناورو">ناورو</option>
                    <option value="نيبال">نيبال</option>
                    <option value="هولندا">هولندا</option>
                    <option value="نيوزيلندا">نيوزيلندا</option>
                    <option value="نيكاراجوا">نيكاراجوا</option>
                    <option value="النيجر">النيجر</option>
                    <option value="نيجيريا">نيجيريا</option>
                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                    <option value="النرويج">النرويج</option>
                    <option value="سلطنة عمان">سلطنة عمان</option>
                    <option value="باكستان">باكستان</option>
                    <option value="بالاو">بالاو</option>
                    <option value="بنما">بنما</option>
                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                    <option value="باراغواي">باراغواي</option>
                    <option value="بيرو">بيرو</option>
                    <option value="الفلبين">الفلبين</option>
                    <option value="بولندا">بولندا</option>
                    <option value="البرتغال">البرتغال</option>
                    <option value="قطر">قطر</option>
                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                    <option value="رومانيا">رومانيا</option>
                    <option value="روسيا">روسيا</option>
                    <option value="رواندا">رواندا</option>
                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                    <option value="سانت لوسيا">سانت لوسيا</option>
                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                    <option value="ساموا">ساموا</option>
                    <option value="سان مارينو">سان مارينو</option>
                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                    <option value="السعودية">السعودية</option>
                    <option value="السنغال">السنغال</option>
                    <option value="صربيا">صربيا</option>
                    <option value="سيشيل">سيشيل</option>
                    <option value="سيراليون">سيراليون</option>
                    <option value="سنغافورة">سنغافورة</option>
                    <option value="سلوفاكيا">سلوفاكيا</option>
                    <option value="سلوفينيا">سلوفينيا</option>
                    <option value="جزر سليمان">جزر سليمان</option>
                    <option value="الصومال">الصومال</option>
                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                    <option value="جنوب السودان">جنوب السودان</option>
                    <option value="إسبانيا">إسبانيا</option>
                    <option value="سريلانكا">سريلانكا</option>
                    <option value="السودان">السودان</option>
                    <option value="سورينام">سورينام</option>
                    <option value="سوازيلاند">سوازيلاند</option>
                    <option value="السويد">السويد</option>
                    <option value="سويسرا">سويسرا</option>
                    <option value="سوريا">سوريا</option>
                    <option value="طاجيكستان">طاجيكستان</option>
                    <option value="تنزانيا">تنزانيا</option>
                    <option value="تايلاند">تايلاند</option>
                    <option value="توغو">توغو</option>
                    <option value="تونجا">تونجا</option>
                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                    <option value="تونس">تونس</option>
                    <option value="تركيا">تركيا</option>
                    <option value="تركمانستان">تركمانستان</option>
                    <option value="توفالو">توفالو</option>
                    <option value="أوغندا">أوغندا</option>
                    <option value="أوكرانيا">أوكرانيا</option>
                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                    <option value="أوروغواي">أوروغواي</option>
                    <option value="أوزبكستان">أوزبكستان</option>
                    <option value="فانواتو">فانواتو</option>
                    <option value="فنزويلا">فنزويلا</option>
                    <option value="فيتنام">فيتنام</option>
                    <option value="اليمن">اليمن</option>
                    <option value="زامبيا">زامبيا</option>
                    <option value="زيمبابوي">زيمبابوي</option>
                </select>
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" name="duration" class="metro-input">
            </div>
            <div class="form-group">
                <label>Quality</label>
                </br> </br>
                <input type="radio" name="quality" value="1080P" data-role="radio" checked>1080P
                <input type="radio" name="quality" value="720P" data-role="radio">720P
                <input type="radio" name="quality" value="480p" data-role="radio">480p
            </div>
            <div class="form-group">
                <label>IMDB</label>
                <input type="number" name="imdb" step="0.01" min="0" class="metro-input">
            </div>
            <div class="form-group">
                <label>Translate</label>
                </br> </br>
                <input type="radio" name="translation" value="translated" data-role="radio" checked>translated
                <input type="radio" name="translation" value="not translated" data-role="radio">not translated
            </div>
            <div class="form-group">
                <label>Language</label>
                <select name="language" data-role="select">
                    <option value="الإنجليزية">الإنجليزية</option>
                    <option value="العربية">العربية</option>
                    <option value="الفرنسية">الفرنسية</option>
                    <option value="الإسبانية">الإسبانية</option>
                    <option value="الألمانية">الألمانية</option>
                    <option value="الإيطالية">الإيطالية</option>
                    <option value="الهندية">الهندية</option>
                    <option value="الروسية">الروسية</option>
                    <option value="البرتغالية">البرتغالية</option>
                    <option value="التركية">التركية</option>
                    <option value="النرويجية">النرويجية</option>
                    <option value="الدانماركية">الدانماركية</option>
                    <option value="اليابانية">اليابانية</option>
                    <option value="الكورية">الكورية</option>
                    <option value="الصينية">الصينية</option>
                </select>
            </div>
            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube_link" class="metro-input">
            </div>
            <input type="text" name="views" value="0" hidden>
            <div class="form-group">
                <label>Server 1</label>
                <input type="text" name="server_1" class="metro-input">
            </div>
            <div class="form-group">
                <label>Server 2</label>
                <input type="text" name="server_2" class="metro-input">
            </div>
            <div class="form-group">
                <label>Server 3</label>
                <input type="text" name="server_3" class="metro-input">
            </div>
            <div class="form-group">
                <label>Server 4</label>
                <input type="text" name="server_4" class="metro-input">
            </div>
            <div class="form-group">
                <label>Server 5</label>
                <input type="text" name="server_5" class="metro-input">
            </div>
            <div class="form-group">
                <label>Server 6</label>
                <input type="text" name="server_6" class="metro-input">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Movie Download Link 1</label>
                <input type="text" class="form-control" name="download_link_1" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Movie Download Link 2</label>
                <input type="text" class="form-control" name="download_link_2" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Movie Download Link 3</label>
                <input type="text" class="form-control" name="download_link_3" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label>class</label>
                <select name="class" data-role="select">
                    <option value="أفلام أجنبية">أفلام أجنبية</option>
                    <option value="أفلام تركية">أفلام تركية</option>
                    <option value="أفلام أسيوية">أفلام أسيوية</option>
                    <option value="أفلام هندية">أفلام هندية</option>
                    <option value="أفلام عربية">أفلام عربية</option>
                    <option value="أفلام انمي">أفلام انمي</option>
                    <option value="أفلام كرتون">أفلام كرتون</option>
                </select>
            </div>
            <div class="form-group">
                <label>Producteur </label>
                <input type="text" name="name_producer" class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 1</label>
                <input type="text" name="name_actor1" class="metro-input">
                <label>real name Actor 1</label>
                <input type="text" name="real_name_actor1" class="metro-input">
                <label>image Actor 1</label>
                <input type="text" name="photo_actor1"  class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 2</label>
                <input type="text" name="name_actor2" class="metro-input">
                <label>real name Actor 2</label>
                <input type="text" name="real_name_actor2" class="metro-input">
                <label>image Actor 2</label>
                <input type="text" name="photo_actor2" class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 3</label>
                <input type="text" name="name_actor3" class="metro-input">
                <label>real name Actor 3</label>
                <input type="text" name="real_name_actor3" class="metro-input">
                <label>image Actor 3</label>
                <input type="text" name="photo_actor3"  class="metro-input">
            </div>

            <button type="submit" class="button mif-download primary large rounded">  Add This Movie</button>
        </div>
    </form>
@stop

@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,100&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        .myform{
            position: relative;
            width: 29%;
            padding-top: 2%;
            left: 30%;
        }

    </style>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/plugins/piexif.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/locales/LANG.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html-duration-picker/dist/html-duration-picker.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
@stop
