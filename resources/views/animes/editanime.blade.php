@php
    $types = App\Models\type::get();

@endphp
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <form action="{{ route('animes.update',$anime->id) }}" method="POST" enctype="multipart/form-data" style="width: 60%;position: relative;left: 20%">
        @csrf
        @method('PUT')
        <div class="myform">
            <div class="form-group">
                <label>anime Name</label>
                <input type="text" name="anime_name" value="{{ $anime->anime_name }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>anime Image</label>
                <input type="text" name="image_anime" value="{{ $anime->image_anime }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>anime poster</label>
                <input type="text" name="poster_anime" value="{{ $anime->poster_anime }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tags" value="{{ $anime->tags }}" data-role="taginput"  class="mt-4" data-random-color="true">
            </div>
        <div class="form-group">
            <strong>Types:</strong>
            <select name="types_id[]" class="form-control custom-select" data-role="select" multiple>
                @foreach($types as $type)
                    <option value="{{$type->id }}" @if($anime->Types->containsStrict('id', $type->id)) selected="selected" @endif>
                        {{ $type->type }}
                    </option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label>Date Release</label>
                <select name="date_release" data-role="select">
                    <option value="1900"{{($anime->date_release === '1900') ? 'Selected' : ''}}>1900</option>
                    <option value="1901"{{($anime->date_release === '1901') ? 'Selected' : ''}}>1901</option>
                    <option value="1902"{{($anime->date_release === '1902') ? 'Selected' : ''}}>1902</option>
                    <option value="1903"{{($anime->date_release === '1903') ? 'Selected' : ''}}>1903</option>
                    <option value="1904"{{($anime->date_release === '1904') ? 'Selected' : ''}}>1904</option>
                    <option value="1905"{{($anime->date_release === '1905') ? 'Selected' : ''}}>1905</option>
                    <option value="1906"{{($anime->date_release === '1906') ? 'Selected' : ''}}>1906</option>
                    <option value="1907"{{($anime->date_release === '1907') ? 'Selected' : ''}}>1907</option>
                    <option value="1908"{{($anime->date_release === '1908') ? 'Selected' : ''}}>1908</option>
                    <option value="1909"{{($anime->date_release === '1909') ? 'Selected' : ''}}>1909</option>
                    <option value="1910"{{($anime->date_release === '1910') ? 'Selected' : ''}}>1910</option>
                    <option value="1911"{{($anime->date_release === '1911') ? 'Selected' : ''}}>1911</option>
                    <option value="1912"{{($anime->date_release === '1912') ? 'Selected' : ''}}>1912</option>
                    <option value="1913"{{($anime->date_release === '1913') ? 'Selected' : ''}}>1913</option>
                    <option value="1914"{{($anime->date_release === '1914') ? 'Selected' : ''}}>1914</option>
                    <option value="1915"{{($anime->date_release === '1915') ? 'Selected' : ''}}>1915</option>
                    <option value="1916"{{($anime->date_release === '1916') ? 'Selected' : ''}}>1916</option>
                    <option value="1917"{{($anime->date_release === '1917') ? 'Selected' : ''}}>1917</option>
                    <option value="1918"{{($anime->date_release === '1918') ? 'Selected' : ''}}>1918</option>
                    <option value="1919"{{($anime->date_release === '1919') ? 'Selected' : ''}}>1919</option>
                    <option value="1920"{{($anime->date_release === '1920') ? 'Selected' : ''}}>1920</option>
                    <option value="1921"{{($anime->date_release === '1921') ? 'Selected' : ''}}>1921</option>
                    <option value="1922"{{($anime->date_release === '1922') ? 'Selected' : ''}}>1922</option>
                    <option value="1923"{{($anime->date_release === '1923') ? 'Selected' : ''}}>1923</option>
                    <option value="1924"{{($anime->date_release === '1924') ? 'Selected' : ''}}>1924</option>
                    <option value="1925"{{($anime->date_release === '1925') ? 'Selected' : ''}}>1925</option>
                    <option value="1926"{{($anime->date_release === '1926') ? 'Selected' : ''}}>1926</option>
                    <option value="1927"{{($anime->date_release === '1927') ? 'Selected' : ''}}>1927</option>
                    <option value="1928"{{($anime->date_release === '1928') ? 'Selected' : ''}}>1928</option>
                    <option value="1929"{{($anime->date_release === '1929') ? 'Selected' : ''}}>1929</option>
                    <option value="1930"{{($anime->date_release === '1930') ? 'Selected' : ''}}>1930</option>
                    <option value="1931"{{($anime->date_release === '1931') ? 'Selected' : ''}}>1931</option>
                    <option value="1932"{{($anime->date_release === '1932') ? 'Selected' : ''}}>1932</option>
                    <option value="1933"{{($anime->date_release === '1933') ? 'Selected' : ''}}>1933</option>
                    <option value="1934"{{($anime->date_release === '1934') ? 'Selected' : ''}}>1934</option>
                    <option value="1935"{{($anime->date_release === '1935') ? 'Selected' : ''}}>1935</option>
                    <option value="1936"{{($anime->date_release === '1936') ? 'Selected' : ''}}>1936</option>
                    <option value="1937"{{($anime->date_release === '1937') ? 'Selected' : ''}}>1937</option>
                    <option value="1938"{{($anime->date_release === '1938') ? 'Selected' : ''}}>1938</option>
                    <option value="1939"{{($anime->date_release === '1939') ? 'Selected' : ''}}>1939</option>
                    <option value="1940"{{($anime->date_release === '1940') ? 'Selected' : ''}}>1940</option>
                    <option value="1941"{{($anime->date_release === '1941') ? 'Selected' : ''}}>1941</option>
                    <option value="1942"{{($anime->date_release === '1942') ? 'Selected' : ''}}>1942</option>
                    <option value="1943"{{($anime->date_release === '1943') ? 'Selected' : ''}}>1943</option>
                    <option value="1944"{{($anime->date_release === '1944') ? 'Selected' : ''}}>1944</option>
                    <option value="1945"{{($anime->date_release === '1945') ? 'Selected' : ''}}>1945</option>
                    <option value="1946"{{($anime->date_release === '1946') ? 'Selected' : ''}}>1946</option>
                    <option value="1947"{{($anime->date_release === '1947') ? 'Selected' : ''}}>1947</option>
                    <option value="1948"{{($anime->date_release === '1948') ? 'Selected' : ''}}>1948</option>
                    <option value="1949"{{($anime->date_release === '1949') ? 'Selected' : ''}}>1949</option>
                    <option value="1950"{{($anime->date_release === '1950') ? 'Selected' : ''}}>1950</option>
                    <option value="1951"{{($anime->date_release === '1951') ? 'Selected' : ''}}>1951</option>
                    <option value="1952"{{($anime->date_release === '1952') ? 'Selected' : ''}}>1952</option>
                    <option value="1953"{{($anime->date_release === '1953') ? 'Selected' : ''}}>1953</option>
                    <option value="1954"{{($anime->date_release === '1954') ? 'Selected' : ''}}>1954</option>
                    <option value="1955"{{($anime->date_release === '1955') ? 'Selected' : ''}}>1955</option>
                    <option value="1956"{{($anime->date_release === '1956') ? 'Selected' : ''}}>1956</option>
                    <option value="1957"{{($anime->date_release === '1957') ? 'Selected' : ''}}>1957</option>
                    <option value="1958"{{($anime->date_release === '1958') ? 'Selected' : ''}}>1958</option>
                    <option value="1959"{{($anime->date_release === '1959') ? 'Selected' : ''}}>1959</option>
                    <option value="1960"{{($anime->date_release === '1960') ? 'Selected' : ''}}>1960</option>
                    <option value="1961"{{($anime->date_release === '1961') ? 'Selected' : ''}}>1961</option>
                    <option value="1962"{{($anime->date_release === '1962') ? 'Selected' : ''}}>1962</option>
                    <option value="1963"{{($anime->date_release === '1963') ? 'Selected' : ''}}>1963</option>
                    <option value="1964"{{($anime->date_release === '1964') ? 'Selected' : ''}}>1964</option>
                    <option value="1965"{{($anime->date_release === '1965') ? 'Selected' : ''}}>1965</option>
                    <option value="1966"{{($anime->date_release === '1966') ? 'Selected' : ''}}>1966</option>
                    <option value="1967"{{($anime->date_release === '1967') ? 'Selected' : ''}}>1967</option>
                    <option value="1968"{{($anime->date_release === '1968') ? 'Selected' : ''}}>1968</option>
                    <option value="1969"{{($anime->date_release === '1969') ? 'Selected' : ''}}>1969</option>
                    <option value="1970"{{($anime->date_release === '1970') ? 'Selected' : ''}}>1970</option>
                    <option value="1971"{{($anime->date_release === '1971') ? 'Selected' : ''}}>1971</option>
                    <option value="1972"{{($anime->date_release === '1972') ? 'Selected' : ''}}>1972</option>
                    <option value="1973"{{($anime->date_release === '1973') ? 'Selected' : ''}}>1973</option>
                    <option value="1974"{{($anime->date_release === '1974') ? 'Selected' : ''}}>1974</option>
                    <option value="1975"{{($anime->date_release === '1975') ? 'Selected' : ''}}>1975</option>
                    <option value="1976"{{($anime->date_release === '1976') ? 'Selected' : ''}}>1976</option>
                    <option value="1977"{{($anime->date_release === '1977') ? 'Selected' : ''}}>1977</option>
                    <option value="1978"{{($anime->date_release === '1978') ? 'Selected' : ''}}>1978</option>
                    <option value="1979"{{($anime->date_release === '1979') ? 'Selected' : ''}}>1979</option>
                    <option value="1980"{{($anime->date_release === '1980') ? 'Selected' : ''}}>1980</option>
                    <option value="1981"{{($anime->date_release === '1981') ? 'Selected' : ''}}>1981</option>
                    <option value="1982"{{($anime->date_release === '1982') ? 'Selected' : ''}}>1982</option>
                    <option value="1983"{{($anime->date_release === '1983') ? 'Selected' : ''}}>1983</option>
                    <option value="1984"{{($anime->date_release === '1984') ? 'Selected' : ''}}>1984</option>
                    <option value="1985"{{($anime->date_release === '1985') ? 'Selected' : ''}}>1985</option>
                    <option value="1986"{{($anime->date_release === '1986') ? 'Selected' : ''}}>1986</option>
                    <option value="1987"{{($anime->date_release === '1987') ? 'Selected' : ''}}>1987</option>
                    <option value="1988"{{($anime->date_release === '1988') ? 'Selected' : ''}}>1988</option>
                    <option value="1989"{{($anime->date_release === '1989') ? 'Selected' : ''}}>1989</option>
                    <option value="1990"{{($anime->date_release === '1990') ? 'Selected' : ''}}>1990</option>
                    <option value="1991"{{($anime->date_release === '1991') ? 'Selected' : ''}}>1991</option>
                    <option value="1992"{{($anime->date_release === '1992') ? 'Selected' : ''}}>1992</option>
                    <option value="1993"{{($anime->date_release === '1993') ? 'Selected' : ''}}>1993</option>
                    <option value="1994"{{($anime->date_release === '1994') ? 'Selected' : ''}}>1994</option>
                    <option value="1995"{{($anime->date_release === '1995') ? 'Selected' : ''}}>1995</option>
                    <option value="1996"{{($anime->date_release === '1996') ? 'Selected' : ''}}>1996</option>
                    <option value="1997"{{($anime->date_release === '1997') ? 'Selected' : ''}}>1997</option>
                    <option value="1998"{{($anime->date_release === '1998') ? 'Selected' : ''}}>1998</option>
                    <option value="1999"{{($anime->date_release === '1999') ? 'Selected' : ''}}>1999</option>
                    <option value="2000"{{($anime->date_release === '2000') ? 'Selected' : ''}}>2000</option>
                    <option value="2001"{{($anime->date_release === '2001') ? 'Selected' : ''}}>2001</option>
                    <option value="2002"{{($anime->date_release === '2002') ? 'Selected' : ''}}>2002</option>
                    <option value="2003"{{($anime->date_release === '2003') ? 'Selected' : ''}}>2003</option>
                    <option value="2004"{{($anime->date_release === '2004') ? 'Selected' : ''}}>2004</option>
                    <option value="2005"{{($anime->date_release === '2005') ? 'Selected' : ''}}>2005</option>
                    <option value="2006"{{($anime->date_release === '2006') ? 'Selected' : ''}}>2006</option>
                    <option value="2007"{{($anime->date_release === '2007') ? 'Selected' : ''}}>2007</option>
                    <option value="2008"{{($anime->date_release === '2008') ? 'Selected' : ''}}>2008</option>
                    <option value="2009"{{($anime->date_release === '2009') ? 'Selected' : ''}}>2009</option>
                    <option value="2010"{{($anime->date_release === '2010') ? 'Selected' : ''}}>2010</option>
                    <option value="2011"{{($anime->date_release === '2011') ? 'Selected' : ''}}>2011</option>
                    <option value="2012"{{($anime->date_release === '2012') ? 'Selected' : ''}}>2012</option>
                    <option value="2013"{{($anime->date_release === '2013') ? 'Selected' : ''}}>2013</option>
                    <option value="2014"{{($anime->date_release === '2014') ? 'Selected' : ''}}>2014</option>
                    <option value="2015"{{($anime->date_release === '2015') ? 'Selected' : ''}}>2015</option>
                    <option value="2016"{{($anime->date_release === '2016') ? 'Selected' : ''}}>2016</option>
                    <option value="2017"{{($anime->date_release === '2017') ? 'Selected' : ''}}>2017</option>
                    <option value="2018"{{($anime->date_release === '2018') ? 'Selected' : ''}}>2018</option>
                    <option value="2019"{{($anime->date_release === '2019') ? 'Selected' : ''}}>2019</option>
                    <option value="2020"{{($anime->date_release === '2020') ? 'Selected' : ''}}>2020</option>
                    <option value="2021"{{($anime->date_release === '2021') ? 'Selected' : ''}}>2021</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{ $anime->description }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Age Select</label>
                <select name="age_classification" data-role="select">
                    <option selected>Select Age Classification</option>
                    <option value="Rated G: General audiences – All ages admitted" {{($anime->age_classification === 'Rated G: General audiences – All ages admitted') ? 'Selected' : ''}}>Rated G: General audiences – All ages admitted</option>
                    <option value="Rated PG: Parental guidance suggested – Some material may not be suitable for children."{{($anime->age_classification === 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.') ? 'Selected' : ''}}>Rated PG: Parental guidance suggested – Some material may not be suitable for children.</option>
                    <option value="Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13."{{($anime->age_classification === 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.') ? 'Selected' : ''}}>Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.</option>
                    <option value="Rated R: Restricted – Under 17 requires accompanying parent or adult guardian."{{($anime->age_classification === 'Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.') ? 'Selected' : ''}}>Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.</option>
                    <option value="Rated NC-17: Adults Only – No one 17 and under admitted."{{($anime->age_classification === 'Rated NC-17: Adults Only – No one 17 and under admitted.') ? 'Selected' : ''}}>Rated NC-17: Adults Only – No one 17 and under admitted.</option>
                </select>
            </div>
            <div class="form-group">
                <label>Country :</label>
                <select name="country" data-role="select">
                    <option value="أفغانستان"{{($anime->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="ألبانيا"{{($anime->country === 'ألبانيا') ? 'Selected' : ''}}>ألبانيا</option>
                    <option value="الجزائر"{{($anime->country === 'الجزائر') ? 'Selected' : ''}}>الجزائر</option>
                    <option value="أندورا"{{($anime->country === 'أندورا') ? 'Selected' : ''}}>أندورا</option>
                    <option value="أنغولا"{{($anime->country === 'أنغولا') ? 'Selected' : ''}}>أنغولا</option>
                    <option value="أنتيغوا وباربودا"{{($anime->country === 'أنتيغوا وباربودا') ? 'Selected' : ''}}>أنتيغوا وباربودا</option>
                    <option value="الأرجنتين"{{($anime->country === 'الأرجنتين') ? 'Selected' : ''}}>الأرجنتين</option>
                    <option value="أرمينيا"{{($anime->country === 'أرمينيا') ? 'Selected' : ''}}>أرمينيا</option>
                    <option value="أستراليا"{{($anime->country === 'أستراليا') ? 'Selected' : ''}}>أستراليا</option>
                    <option value="النمسا"{{($anime->country === 'النمسا') ? 'Selected' : ''}}>النمسا</option>
                    <option value="أذربيجان"{{($anime->country === 'أذربيجان') ? 'Selected' : ''}}>أذربيجان</option>
                    <option value="البهاما"{{($anime->country === 'البهاما') ? 'Selected' : ''}}>البهاما</option>
                    <option value="البحرين"{{($anime->country === 'البحرين') ? 'Selected' : ''}}>البحرين</option>
                    <option value="بنغلاديش"{{($anime->country === 'بنغلاديش') ? 'Selected' : ''}}>بنغلاديش</option>
                    <option value="باربادوس"{{($anime->country === 'باربادوس') ? 'Selected' : ''}}>باربادوس</option>
                    <option value="بيلاروسيا"{{($anime->country === 'بيلاروسيا') ? 'Selected' : ''}}>بيلاروسيا</option>
                    <option value="بلجيكا"{{($anime->country === 'بلجيكا') ? 'Selected' : ''}}>بلجيكا</option>
                    <option value="بليز"{{($anime->country === 'بليز') ? 'Selected' : ''}}>بليز</option>
                    <option value="بنين"{{($anime->country === 'بنين') ? 'Selected' : ''}}>بنين</option>
                    <option value="بوتان"{{($anime->country === 'بوتان') ? 'Selected' : ''}}>بوتان</option>
                    <option value="بوليفيا"{{($anime->country === 'بوليفيا') ? 'Selected' : ''}}>بوليفيا</option>
                    <option value="البوسنة والهرسك"{{($anime->country === 'البوسنة والهرسك') ? 'Selected' : ''}}>البوسنة والهرسك</option>
                    <option value="بوتسوانا"{{($anime->country === 'بوتسوانا') ? 'Selected' : ''}}>بوتسوانا</option>
                    <option value="البرازيل"{{($anime->country === 'البرازيل') ? 'Selected' : ''}}>البرازيل</option>
                    <option value="بروناي"{{($anime->country === 'بروناي') ? 'Selected' : ''}}>بروناي</option>
                    <option value="بلغاريا"{{($anime->country === 'بلغاريا') ? 'Selected' : ''}}>بلغاريا</option>
                    <option value="بوركينا فاسو"{{($anime->country === 'بوركينا فاسو') ? 'Selected' : ''}}>بوركينا فاسو</option>
                    <option value="بوروندي"{{($anime->country === 'بوروندي') ? 'Selected' : ''}}>بوروندي</option>
                    <option value="كمبوديا"{{($anime->country === 'كمبوديا') ? 'Selected' : ''}}>كمبوديا</option>
                    <option value="الكاميرون"{{($anime->country === 'الكاميرون') ? 'Selected' : ''}}>الكاميرون</option>
                    <option value="كندا"{{($anime->country === 'كندا') ? 'Selected' : ''}}>كندا</option>
                    <option value="الرأس الأخضر"{{($anime->country === 'الرأس الأخضر') ? 'Selected' : ''}}>الرأس الأخضر</option>
                    <option value="جمهورية أفريقيا الوسطى"{{($anime->country === 'جمهورية أفريقيا الوسطى') ? 'Selected' : ''}}>جمهورية أفريقيا الوسطى</option>
                    <option value="تشاد"{{($anime->country === 'تشاد') ? 'Selected' : ''}}>تشاد</option>
                    <option value="تشيلي"{{($anime->country === 'تشيلي') ? 'Selected' : ''}}>تشيلي</option>
                    <option value="الصين"{{($anime->country === 'الصين') ? 'Selected' : ''}}>الصين</option>
                    <option value="كولومبيا"{{($anime->country === 'كولومبيا') ? 'Selected' : ''}}>كولومبيا</option>
                    <option value="جزر القمر"{{($anime->country === 'جزر القمر') ? 'Selected' : ''}}>جزر القمر</option>
                    <option value="كوستاريكا"{{($anime->country === 'كوستاريكا') ? 'Selected' : ''}}>كوستاريكا</option>
                    <option value="ساحل العاج"{{($anime->country === 'ساحل العاج') ? 'Selected' : ''}}>ساحل العاج</option>
                    <option value="كرواتيا"{{($anime->country === 'كرواتيا') ? 'Selected' : ''}}>كرواتيا</option>
                    <option value="كوبا"{{($anime->country === 'كوبا') ? 'Selected' : ''}}>كوبا</option>
                    <option value="قبرص"{{($anime->country === 'قبرص') ? 'Selected' : ''}}>قبرص</option>
                    <option value="التشيك"{{($anime->country === 'التشيك') ? 'Selected' : ''}}>التشيك</option>
                    <option value="جمهورية الكونغو الديمقراطية"{{($anime->country === 'جمهورية الكونغو الديمقراطية') ? 'Selected' : ''}}>جمهورية الكونغو الديمقراطية</option>
                    <option value="الدنمارك"{{($anime->country === 'الدنمارك') ? 'Selected' : ''}}>الدنمارك</option>
                    <option value="جيبوتي"{{($anime->country === 'جيبوتي') ? 'Selected' : ''}}>جيبوتي</option>
                    <option value="دومينيكا"{{($anime->country === 'دومينيكا') ? 'Selected' : ''}}>دومينيكا</option>
                    <option value="جمهورية الدومينيكان"{{($anime->country === 'جمهورية الدومينيكان') ? 'Selected' : ''}}>جمهورية الدومينيكان</option>
                    <option value="تيمور الشرقية"{{($anime->country === 'تيمور الشرقية') ? 'Selected' : ''}}>تيمور الشرقية</option>
                    <option value="الإكوادور"{{($anime->country === 'الإكوادور') ? 'Selected' : ''}}>الإكوادور</option>
                    <option value="مصر"{{($anime->country === 'مصر') ? 'Selected' : ''}}>مصر</option>
                    <option value="السلفادور"{{($anime->country === 'السلفادور') ? 'Selected' : ''}}>السلفادور</option>
                    <option value="غينيا الاستوائية"{{($anime->country === 'غينيا الاستوائية') ? 'Selected' : ''}}>غينيا الاستوائية</option>
                    <option value="إريتريا"{{($anime->country === 'إريتريا') ? 'Selected' : ''}}>إريتريا</option>
                    <option value="إستونيا"{{($anime->country === 'إستونيا') ? 'Selected' : ''}}>إستونيا</option>
                    <option value="إثيوبيا"{{($anime->country === 'إثيوبيا') ? 'Selected' : ''}}>إثيوبيا</option>
                    <option value="فيجي"{{($anime->country === 'فيجي') ? 'Selected' : ''}}>فيجي</option>
                    <option value="فنلندا"{{($anime->country === 'فنلندا') ? 'Selected' : ''}}>فنلندا</option>
                    <option value="فرنسا"{{($anime->country === 'فرنسا') ? 'Selected' : ''}}>فرنسا</option>
                    <option value="الغابون"{{($anime->country === 'الغابون') ? 'Selected' : ''}}>الغابون</option>
                    <option value="غامبيا"{{($anime->country === 'غامبيا') ? 'Selected' : ''}}>غامبيا</option>
                    <option value="جورجيا"{{($anime->country === 'جورجيا') ? 'Selected' : ''}}>جورجيا</option>
                    <option value="ألمانيا"{{($anime->country === 'ألمانيا') ? 'Selected' : ''}}>ألمانيا</option>
                    <option value="غانا"{{($anime->country === 'غانا') ? 'Selected' : ''}}>غانا</option>
                    <option value="اليونان"{{($anime->country === 'اليونان') ? 'Selected' : ''}}>اليونان</option>
                    <option value="جرينادا"{{($anime->country === 'جرينادا') ? 'Selected' : ''}}>جرينادا</option>
                    <option value="غواتيمالا"{{($anime->country === 'غواتيمالا') ? 'Selected' : ''}}>غواتيمالا</option>
                    <option value="غينيا"{{($anime->country === 'غينيا') ? 'Selected' : ''}}>غينيا</option>
                    <option value="غينيا بيساو"{{($anime->country === 'غينيا بيساو') ? 'Selected' : ''}}>غينيا بيساو</option>
                    <option value="غويانا"{{($anime->country === 'غويانا') ? 'Selected' : ''}}>غويانا</option>
                    <option value="هايتي"{{($anime->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="هندوراس"{{($anime->country === 'هندوراس') ? 'Selected' : ''}}>هندوراس</option>
                    <option value="المجر"{{($anime->country === 'المجر') ? 'Selected' : ''}}>المجر</option>
                    <option value="آيسلندا"{{($anime->country === 'آيسلندا') ? 'Selected' : ''}}>آيسلندا</option>
                    <option value="الهند"{{($anime->country === 'الهند') ? 'Selected' : ''}}>الهند</option>
                    <option value="إندونيسيا"{{($anime->country === 'إندونيسيا') ? 'Selected' : ''}}>إندونيسيا</option>
                    <option value="إيران"{{($anime->country === 'إيران') ? 'Selected' : ''}}>إيران</option>
                    <option value="العراق"{{($anime->country === 'العراق') ? 'Selected' : ''}}>العراق</option>
                    <option value="جمهورية أيرلندا"{{($anime->country === 'جمهورية أيرلندا') ? 'Selected' : ''}}>جمهورية أيرلندا</option>
                    <option value="فلسطين"{{($anime->country === 'فلسطين') ? 'Selected' : ''}}>فلسطين</option>
                    <option value="إيطاليا"{{($anime->country === 'إيطاليا') ? 'Selected' : ''}}>إيطاليا</option>
                    <option value="جامايكا"{{($anime->country === 'جامايكا') ? 'Selected' : ''}}>جامايكا</option>
                    <option value="اليابان"{{($anime->country === 'اليابان') ? 'Selected' : ''}}>اليابان</option>
                    <option value="الأردن"{{($anime->country === 'الأردن') ? 'Selected' : ''}}>الأردن</option>
                    <option value="كازاخستان"{{($anime->country === 'كازاخستان') ? 'Selected' : ''}}>كازاخستان</option>
                    <option value="كينيا"{{($anime->country === 'كينيا') ? 'Selected' : ''}}>كينيا</option>
                    <option value="كيريباتي"{{($anime->country === 'كيريباتي') ? 'Selected' : ''}}>كيريباتي</option>
                    <option value="الكويت"{{($anime->country === 'الكويت') ? 'Selected' : ''}}>الكويت</option>
                    <option value="قرغيزستان"{{($anime->country === 'قرغيزستان') ? 'Selected' : ''}}>قرغيزستان</option>
                    <option value="لاوس"{{($anime->country === 'لاوس') ? 'Selected' : ''}}>لاوس</option>
                    <option value="لاتفيا"{{($anime->country === 'لاتفيا') ? 'Selected' : ''}}>لاتفيا</option>
                    <option value="لبنان"{{($anime->country === 'لبنان') ? 'Selected' : ''}}>لبنان</option>
                    <option value="ليسوتو"{{($anime->country === 'ليسوتو') ? 'Selected' : ''}}>ليسوتو</option>
                    <option value="ليبيريا"{{($anime->country === 'ليبيريا') ? 'Selected' : ''}}>ليبيريا</option>
                    <option value="ليبيا"{{($anime->country === 'ليبيا') ? 'Selected' : ''}}>ليبيا</option>
                    <option value="ليختنشتاين"{{($anime->country === 'ليختنشتاين') ? 'Selected' : ''}}>ليختنشتاين</option>
                    <option value="ليتوانيا"{{($anime->country === 'ليتوانيا') ? 'Selected' : ''}}>ليتوانيا</option>
                    <option value="لوكسمبورغ"{{($anime->country === 'لوكسمبورغ') ? 'Selected' : ''}}>لوكسمبورغ</option>
                    <option value="مدغشقر"{{($anime->country === 'مدغشقر') ? 'Selected' : ''}}>مدغشقر</option>
                    <option value="مالاوي"{{($anime->country === 'مالاوي') ? 'Selected' : ''}}>مالاوي</option>
                    <option value="ماليزيا"{{($anime->country === 'ماليزيا') ? 'Selected' : ''}}>ماليزيا</option>
                    <option value="جزر المالديف"{{($anime->country === 'جزر المالديف') ? 'Selected' : ''}}>جزر المالديف</option>
                    <option value="مالي"{{($anime->country === 'مالي') ? 'Selected' : ''}}>مالي</option>
                    <option value="مالطا"{{($anime->country === 'مالطا') ? 'Selected' : ''}}>مالطا</option>
                    <option value="جزر مارشال"{{($anime->country === 'جزر مارشال') ? 'Selected' : ''}}>جزر مارشال</option>
                    <option value="موريتانيا"{{($anime->country === 'موريتانيا') ? 'Selected' : ''}}>موريتانيا</option>
                    <option value="موريشيوس"{{($anime->country === 'موريشيوس') ? 'Selected' : ''}}>موريشيوس</option>
                    <option value="المكسيك"{{($anime->country === 'المكسيك') ? 'Selected' : ''}}>المكسيك</option>
                    <option value="مايكرونيزيا"{{($anime->country === 'مايكرونيزيا') ? 'Selected' : ''}}>مايكرونيزيا</option>
                    <option value="مولدوفا"{{($anime->country === 'مولدوفا') ? 'Selected' : ''}}>مولدوفا</option>
                    <option value="موناكو"{{($anime->country === 'موناكو') ? 'Selected' : ''}}>موناكو</option>
                    <option value="منغوليا"{{($anime->country === 'منغوليا') ? 'Selected' : ''}}>منغوليا</option>
                    <option value="الجبل الأسود"{{($anime->country === 'الجبل الأسود') ? 'Selected' : ''}}>الجبل الأسود</option>
                    <option value="المغرب"{{($anime->country === 'المغرب') ? 'Selected' : ''}}>المغرب</option>
                    <option value="موزمبيق"{{($anime->country === 'موزمبيق') ? 'Selected' : ''}}>موزمبيق</option>
                    <option value="بورما"{{($anime->country === 'بورما') ? 'Selected' : ''}}>بورما</option>
                    <option value="ناميبيا"{{($anime->country === 'ناميبيا') ? 'Selected' : ''}}>ناميبيا</option>
                    <option value="ناورو"{{($anime->country === 'ناورو') ? 'Selected' : ''}}>ناورو</option>
                    <option value="نيبال"{{($anime->country === 'نيبال') ? 'Selected' : ''}}>نيبال</option>
                    <option value="هولندا"{{($anime->country === 'هولندا') ? 'Selected' : ''}}>هولندا</option>
                    <option value="نيوزيلندا"{{($anime->country === 'نيوزيلندا') ? 'Selected' : ''}}>نيوزيلندا</option>
                    <option value="نيكاراجوا"{{($anime->country === 'نيكاراجوا') ? 'Selected' : ''}}>نيكاراجوا</option>
                    <option value="النيجر"{{($anime->country === 'النيجر') ? 'Selected' : ''}}>النيجر</option>
                    <option value="نيجيريا"{{($anime->country === 'نيجيريا') ? 'Selected' : ''}}>نيجيريا</option>
                    <option value="كوريا الشمالية"{{($anime->country === 'كوريا الشمالية') ? 'Selected' : ''}}>كوريا الشمالية</option>
                    <option value="النرويج"{{($anime->country === 'النرويج') ? 'Selected' : ''}}>النرويج</option>
                    <option value="سلطنة عمان"{{($anime->country === 'سلطنة عمان') ? 'Selected' : ''}}>سلطنة عمان</option>
                    <option value="باكستان"{{($anime->country === 'باكستان') ? 'Selected' : ''}}>باكستان</option>
                    <option value="بالاو"{{($anime->country === 'بالاو') ? 'Selected' : ''}}>بالاو</option>
                    <option value="بنما"{{($anime->country === 'بنما') ? 'Selected' : ''}}>بنما</option>
                    <option value="بابوا غينيا الجديدة"{{($anime->country === 'بابوا غينيا الجديدة') ? 'Selected' : ''}}>بابوا غينيا الجديدة</option>
                    <option value="باراغواي"{{($anime->country === 'باراغواي') ? 'Selected' : ''}}>باراغواي</option>
                    <option value="بيرو"{{($anime->country === 'بيرو') ? 'Selected' : ''}}>بيرو</option>
                    <option value="الفلبين"{{($anime->country === 'الفلبين') ? 'Selected' : ''}}>الفلبين</option>
                    <option value="بولندا"{{($anime->country === 'بولندا') ? 'Selected' : ''}}>بولندا</option>
                    <option value="البرتغال"{{($anime->country === 'البرتغال') ? 'Selected' : ''}}>البرتغال</option>
                    <option value="قطر"{{($anime->country === 'قطر') ? 'Selected' : ''}}>قطر</option>
                    <option value="جمهورية الكونغو"{{($anime->country === 'جمهورية الكونغو') ? 'Selected' : ''}}>جمهورية الكونغو</option>
                    <option value="جمهورية مقدونيا"{{($anime->country === 'جمهورية مقدونيا') ? 'Selected' : ''}}>جمهورية مقدونيا</option>
                    <option value="رومانيا"{{($anime->country === 'رومانيا') ? 'Selected' : ''}}>رومانيا</option>
                    <option value="روسيا"{{($anime->country === 'روسيا') ? 'Selected' : ''}}>روسيا</option>
                    <option value="رواندا"{{($anime->country === 'رواندا') ? 'Selected' : ''}}>رواندا</option>
                    <option value="سانت كيتس ونيفيس"{{($anime->country === 'سانت كيتس ونيفيس') ? 'Selected' : ''}}>سانت كيتس ونيفيس</option>
                    <option value="سانت لوسيا"{{($anime->country === 'سانت لوسيا') ? 'Selected' : ''}}>سانت لوسيا</option>
                    <option value="سانت فنسينت والجرينادينز"{{($anime->country === 'سانت فنسينت والجرينادينز') ? 'Selected' : ''}}>سانت فنسينت والجرينادينز</option>
                    <option value="ساموا"{{($anime->country === 'ساموا') ? 'Selected' : ''}}>ساموا</option>
                    <option value="سان مارينو"{{($anime->country === 'سان مارينو') ? 'Selected' : ''}}>سان مارينو</option>
                    <option value="ساو تومي وبرينسيب"{{($anime->country === 'ساو تومي وبرينسيب') ? 'Selected' : ''}}>ساو تومي وبرينسيب</option>
                    <option value="السعودية"{{($anime->country === 'السعودية') ? 'Selected' : ''}}>السعودية</option>
                    <option value="السنغال"{{($anime->country === 'السنغال') ? 'Selected' : ''}}>السنغال</option>
                    <option value="صربيا"{{($anime->country === 'صربيا') ? 'Selected' : ''}}>صربيا</option>
                    <option value="سيشيل"{{($anime->country === 'سيشيل') ? 'Selected' : ''}}>سيشيل</option>
                    <option value="سيراليون"{{($anime->country === 'سيراليون') ? 'Selected' : ''}}>سيراليون</option>
                    <option value="سنغافورة"{{($anime->country === 'سنغافورة') ? 'Selected' : ''}}>سنغافورة</option>
                    <option value="سلوفاكيا"{{($anime->country === 'سلوفاكيا') ? 'Selected' : ''}}>سلوفاكيا</option>
                    <option value="سلوفينيا"{{($anime->country === 'سلوفينيا') ? 'Selected' : ''}}>سلوفينيا</option>
                    <option value="جزر سليمان"{{($anime->country === 'جزر سليمان') ? 'Selected' : ''}}>جزر سليمان</option>
                    <option value="الصومال"{{($anime->country === 'الصومال') ? 'Selected' : ''}}>الصومال</option>
                    <option value="جنوب أفريقيا"{{($anime->country === 'جنوب أفريقيا') ? 'Selected' : ''}}>جنوب أفريقيا</option>
                    <option value="كوريا الجنوبية"{{($anime->country === 'كوريا الجنوبية') ? 'Selected' : ''}}>كوريا الجنوبية</option>
                    <option value="جنوب السودان"{{($anime->country === 'جنوب السودان') ? 'Selected' : ''}}>جنوب السودان</option>
                    <option value="إسبانيا"{{($anime->country === 'إسبانيا') ? 'Selected' : ''}}>إسبانيا</option>
                    <option value="سريلانكا"{{($anime->country === 'سريلانكا') ? 'Selected' : ''}}>سريلانكا</option>
                    <option value="السودان"{{($anime->country === 'السودان') ? 'Selected' : ''}}>السودان</option>
                    <option value="سورينام"{{($anime->country === 'سورينام') ? 'Selected' : ''}}>سورينام</option>
                    <option value="سوازيلاند"{{($anime->country === 'سوازيلاند') ? 'Selected' : ''}}>سوازيلاند</option>
                    <option value="السويد"{{($anime->country === 'السويد') ? 'Selected' : ''}}>السويد</option>
                    <option value="سويسرا"{{($anime->country === 'سويسرا') ? 'Selected' : ''}}>سويسرا</option>
                    <option value="سوريا"{{($anime->country === 'سوريا') ? 'Selected' : ''}}>سوريا</option>
                    <option value="طاجيكستان"{{($anime->country === 'طاجيكستان') ? 'Selected' : ''}}>طاجيكستان</option>
                    <option value="تنزانيا"{{($anime->country === 'تنزانيا') ? 'Selected' : ''}}>تنزانيا</option>
                    <option value="تايلاند"{{($anime->country === 'تايلاند') ? 'Selected' : ''}}>تايلاند</option>
                    <option value="توغو"{{($anime->country === 'توغو') ? 'Selected' : ''}}>توغو</option>
                    <option value="تونجا"{{($anime->country === 'تونجا') ? 'Selected' : ''}}>تونجا</option>
                    <option value="ترينيداد وتوباغو"{{($anime->country === 'ترينيداد وتوباغو') ? 'Selected' : ''}}>ترينيداد وتوباغو</option>
                    <option value="تونس"{{($anime->country === 'تونس') ? 'Selected' : ''}}>تونس</option>
                    <option value="تركيا"{{($anime->country === 'تركيا') ? 'Selected' : ''}}>تركيا</option>
                    <option value="تركمانستان"{{($anime->country === 'تركمانستان') ? 'Selected' : ''}}>تركمانستان</option>
                    <option value="توفالو"{{($anime->country === 'توفالو') ? 'Selected' : ''}}>توفالو</option>
                    <option value="أوغندا"{{($anime->country === 'أوغندا') ? 'Selected' : ''}}>أوغندا</option>
                    <option value="أوكرانيا"{{($anime->country === 'أوكرانيا') ? 'Selected' : ''}}>أوكرانيا</option>
                    <option value="الإمارات العربية المتحدة"{{($anime->country === 'الإمارات العربية المتحدة') ? 'Selected' : ''}}>الإمارات العربية المتحدة</option>
                    <option value="المملكة المتحدة"{{($anime->country === 'المملكة المتحدة') ? 'Selected' : ''}}>المملكة المتحدة</option>
                    <option value="الولايات المتحدة"{{($anime->country === 'الولايات المتحدة') ? 'Selected' : ''}}>الولايات المتحدة</option>
                    <option value="أوروغواي"{{($anime->country === 'أوروغواي') ? 'Selected' : ''}}>أوروغواي</option>
                    <option value="أوزبكستان"{{($anime->country === 'أوزبكستان') ? 'Selected' : ''}}>أوزبكستان</option>
                    <option value="فانواتو"{{($anime->country === 'فانواتو') ? 'Selected' : ''}}>فانواتو</option>
                    <option value="فنزويلا"{{($anime->country === 'فنزويلا') ? 'Selected' : ''}}>فنزويلا</option>
                    <option value="فيتنام"{{($anime->country === 'فيتنام') ? 'Selected' : ''}}>فيتنام</option>
                    <option value="اليمن"{{($anime->country === 'اليمن') ? 'Selected' : ''}}>اليمن</option>
                    <option value="زامبيا"{{($anime->country === 'زامبيا') ? 'Selected' : ''}}>زامبيا</option>
                    <option value="زيمبابوي"{{($anime->country === 'زيمبابوي') ? 'Selected' : ''}}>زيمبابوي</option>
                </select>
            </div>
            <div class="form-group">
                <label>IMDB</label>
                <input type="number" value="{{ $anime->imdb }}" name="imdb" step="0.01" min="0" class="metro-input">
            </div>
            <div class="form-group">
                <label>Language</label>
                <select name="language" data-role="select">
                    <option value="الإنجليزية"{{($anime->country === 'الإنجليزية') ? 'Selected' : ''}}>الإنجليزية</option>
                    <option value="العربية"{{($anime->country === 'العربية') ? 'Selected' : ''}}>العربية</option>
                    <option value="الفرنسية"{{($anime->country === 'الفرنسية') ? 'Selected' : ''}}>الفرنسية</option>
                    <option value="الإسبانية"{{($anime->country === 'الإسبانية') ? 'Selected' : ''}}>الإسبانية</option>
                    <option value="الألمانية"{{($anime->country === 'الألمانية') ? 'Selected' : ''}}>الألمانية</option>
                    <option value="الإيطالية"{{($anime->country === 'الإيطالية') ? 'Selected' : ''}}>الإيطالية</option>
                    <option value="الهندية"{{($anime->country === 'الهندية') ? 'Selected' : ''}}>الهندية</option>
                    <option value="الروسية"{{($anime->country === 'الروسية') ? 'Selected' : ''}}>الروسية</option>
                    <option value="البرتغالية"{{($anime->country === 'البرتغالية') ? 'Selected' : ''}}>البرتغالية</option>
                    <option value="التركية"{{($anime->country === 'التركية') ? 'Selected' : ''}}>التركية</option>
                    <option value="النرويجية"{{($anime->country === 'النرويجية') ? 'Selected' : ''}}>النرويجية</option>
                    <option value="الدانماركية"{{($anime->country === 'الدانماركية') ? 'Selected' : ''}}>الدانماركية</option>
                    <option value="اليابانية"{{($anime->country === 'اليابانية') ? 'Selected' : ''}}>اليابانية</option>
                    <option value="الكورية"{{($anime->country === 'الكورية') ? 'Selected' : ''}}>الكورية</option>
                    <option value="الصينية"{{($anime->country === 'الصينية') ? 'Selected' : ''}}>الصينية</option>
                </select>
            </div>

            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube_link" value="{{ $anime->youtube_link }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Producteur </label>
                <input type="text" name="name_producer" value="{{ $anime->name_producer }}"  class="metro-input">
            </div>
        <button class="btn btn-primary" type="submit">Edit anime</button>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ $anime->image_anime }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="image_anime" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
              </div>
            </div>
          </div>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ $anime->poster_anime }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="poster_anime" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
              </div>
            </div>
          </div>
        </div>

    </form>
@stop

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,100&display=swap');

    *{
        /*background: #ecf0f1;*/
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    .myform{
            position: relative;
            width: 72%;
            padding-top: 2%;
        }
        body {
          margin:0px;

        }
        .image-upload-one{
          position: relative;
          top: -120rem;
          left: -38rem;
      }
        .center {
          display:inline;
          margin: 3px;
        }

        .form-input {
            width: 23.6REM;
            height: 27.6rem;
            position: relative;
            padding: 3px;
            left: 92rem;
            top: 29rem;
            background: #fff;
            border: 2px dashed dodgerblue;
        }
        .form-input input {
          display:none;
        }
        .form-input label {
            display:block;
            width: 23rem;
            height: 27rem;
            background:#333;
            border-radius:10px;
            cursor:pointer;
        }

        .form-input img {
            width: 23rem;
            height: 27rem;
            margin: 2px;
        }

        .imgRemove{
            position: relative;
            bottom: 26.9rem;
            left: 90%;
            background-color: transparent;
            border: none;
            font-size: 30px;
            outline: none;
        }
        .imgRemove::after{
          content: ' \21BA';
          color: #fff;
          font-weight: 900;
          border-radius: 8px;
          cursor: pointer;
        }

</style>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

@section('js')
<script>
    function showPreviewOne(event){
            if(event.target.files.length > 0){
              let src = URL.createObjectURL(event.target.files[0]);
              let preview = document.getElementById("file-ip-1-preview");
              preview.src = src;
              preview.style.display = "block";
            }
          }
          function myImgRemoveFunctionOne() {
            document.getElementById("file-ip-1-preview").src = "https://i.ibb.co/ZVFsg37/default.png";
          }
</script>
    <<script src="https://cdn.jsdelivr.net/npm/html-duration-picker/dist/html-duration-picker.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
@stop
