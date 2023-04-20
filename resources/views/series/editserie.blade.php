@php
    $genres = App\Models\Genre::get();

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
    <form action="{{ route('updateserie',$serie->id) }}" method="POST" enctype="multipart/form-data" style="width: 60%;position: relative;left: 20%">
        @csrf
        @method('PUT')
        <input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
        <div class="myform ">
            <div class="form-group">
                <label>Serie Name</label>
                <input type="text" name="serie_name" value="{{ $serie->serie_name }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Serie Image</label>
                <input type="text" name="serie_photo" value="{{ $serie->serie_photo }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Serie poster</label>
                <input type="text" name="image_poster_serie" value="{{ $serie->image_poster_serie }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tags" value="{{ $serie->tags }}" data-role="taginput"  class="mt-4" data-random-color="true">
            </div>
        <div class="form-group">
            <strong>Genres:</strong>
            <select name="genres_id[]" class="form-control custom-select" data-role="select" multiple>
                @foreach($genres as $genre)
                    <option value="{{$genre->id }}" @if($serie->Genres->containsStrict('id', $genre->id)) selected="selected" @endif>
                        {{ $genre->genre }}
                    </option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label>Date Release</label>
                <select name="date_release" data-role="select">
                    <option value="1900"{{($serie->date_release === '1900') ? 'Selected' : ''}}>1900</option>
                    <option value="1901"{{($serie->date_release === '1901') ? 'Selected' : ''}}>1901</option>
                    <option value="1902"{{($serie->date_release === '1902') ? 'Selected' : ''}}>1902</option>
                    <option value="1903"{{($serie->date_release === '1903') ? 'Selected' : ''}}>1903</option>
                    <option value="1904"{{($serie->date_release === '1904') ? 'Selected' : ''}}>1904</option>
                    <option value="1905"{{($serie->date_release === '1905') ? 'Selected' : ''}}>1905</option>
                    <option value="1906"{{($serie->date_release === '1906') ? 'Selected' : ''}}>1906</option>
                    <option value="1907"{{($serie->date_release === '1907') ? 'Selected' : ''}}>1907</option>
                    <option value="1908"{{($serie->date_release === '1908') ? 'Selected' : ''}}>1908</option>
                    <option value="1909"{{($serie->date_release === '1909') ? 'Selected' : ''}}>1909</option>
                    <option value="1910"{{($serie->date_release === '1910') ? 'Selected' : ''}}>1910</option>
                    <option value="1911"{{($serie->date_release === '1911') ? 'Selected' : ''}}>1911</option>
                    <option value="1912"{{($serie->date_release === '1912') ? 'Selected' : ''}}>1912</option>
                    <option value="1913"{{($serie->date_release === '1913') ? 'Selected' : ''}}>1913</option>
                    <option value="1914"{{($serie->date_release === '1914') ? 'Selected' : ''}}>1914</option>
                    <option value="1915"{{($serie->date_release === '1915') ? 'Selected' : ''}}>1915</option>
                    <option value="1916"{{($serie->date_release === '1916') ? 'Selected' : ''}}>1916</option>
                    <option value="1917"{{($serie->date_release === '1917') ? 'Selected' : ''}}>1917</option>
                    <option value="1918"{{($serie->date_release === '1918') ? 'Selected' : ''}}>1918</option>
                    <option value="1919"{{($serie->date_release === '1919') ? 'Selected' : ''}}>1919</option>
                    <option value="1920"{{($serie->date_release === '1920') ? 'Selected' : ''}}>1920</option>
                    <option value="1921"{{($serie->date_release === '1921') ? 'Selected' : ''}}>1921</option>
                    <option value="1922"{{($serie->date_release === '1922') ? 'Selected' : ''}}>1922</option>
                    <option value="1923"{{($serie->date_release === '1923') ? 'Selected' : ''}}>1923</option>
                    <option value="1924"{{($serie->date_release === '1924') ? 'Selected' : ''}}>1924</option>
                    <option value="1925"{{($serie->date_release === '1925') ? 'Selected' : ''}}>1925</option>
                    <option value="1926"{{($serie->date_release === '1926') ? 'Selected' : ''}}>1926</option>
                    <option value="1927"{{($serie->date_release === '1927') ? 'Selected' : ''}}>1927</option>
                    <option value="1928"{{($serie->date_release === '1928') ? 'Selected' : ''}}>1928</option>
                    <option value="1929"{{($serie->date_release === '1929') ? 'Selected' : ''}}>1929</option>
                    <option value="1930"{{($serie->date_release === '1930') ? 'Selected' : ''}}>1930</option>
                    <option value="1931"{{($serie->date_release === '1931') ? 'Selected' : ''}}>1931</option>
                    <option value="1932"{{($serie->date_release === '1932') ? 'Selected' : ''}}>1932</option>
                    <option value="1933"{{($serie->date_release === '1933') ? 'Selected' : ''}}>1933</option>
                    <option value="1934"{{($serie->date_release === '1934') ? 'Selected' : ''}}>1934</option>
                    <option value="1935"{{($serie->date_release === '1935') ? 'Selected' : ''}}>1935</option>
                    <option value="1936"{{($serie->date_release === '1936') ? 'Selected' : ''}}>1936</option>
                    <option value="1937"{{($serie->date_release === '1937') ? 'Selected' : ''}}>1937</option>
                    <option value="1938"{{($serie->date_release === '1938') ? 'Selected' : ''}}>1938</option>
                    <option value="1939"{{($serie->date_release === '1939') ? 'Selected' : ''}}>1939</option>
                    <option value="1940"{{($serie->date_release === '1940') ? 'Selected' : ''}}>1940</option>
                    <option value="1941"{{($serie->date_release === '1941') ? 'Selected' : ''}}>1941</option>
                    <option value="1942"{{($serie->date_release === '1942') ? 'Selected' : ''}}>1942</option>
                    <option value="1943"{{($serie->date_release === '1943') ? 'Selected' : ''}}>1943</option>
                    <option value="1944"{{($serie->date_release === '1944') ? 'Selected' : ''}}>1944</option>
                    <option value="1945"{{($serie->date_release === '1945') ? 'Selected' : ''}}>1945</option>
                    <option value="1946"{{($serie->date_release === '1946') ? 'Selected' : ''}}>1946</option>
                    <option value="1947"{{($serie->date_release === '1947') ? 'Selected' : ''}}>1947</option>
                    <option value="1948"{{($serie->date_release === '1948') ? 'Selected' : ''}}>1948</option>
                    <option value="1949"{{($serie->date_release === '1949') ? 'Selected' : ''}}>1949</option>
                    <option value="1950"{{($serie->date_release === '1950') ? 'Selected' : ''}}>1950</option>
                    <option value="1951"{{($serie->date_release === '1951') ? 'Selected' : ''}}>1951</option>
                    <option value="1952"{{($serie->date_release === '1952') ? 'Selected' : ''}}>1952</option>
                    <option value="1953"{{($serie->date_release === '1953') ? 'Selected' : ''}}>1953</option>
                    <option value="1954"{{($serie->date_release === '1954') ? 'Selected' : ''}}>1954</option>
                    <option value="1955"{{($serie->date_release === '1955') ? 'Selected' : ''}}>1955</option>
                    <option value="1956"{{($serie->date_release === '1956') ? 'Selected' : ''}}>1956</option>
                    <option value="1957"{{($serie->date_release === '1957') ? 'Selected' : ''}}>1957</option>
                    <option value="1958"{{($serie->date_release === '1958') ? 'Selected' : ''}}>1958</option>
                    <option value="1959"{{($serie->date_release === '1959') ? 'Selected' : ''}}>1959</option>
                    <option value="1960"{{($serie->date_release === '1960') ? 'Selected' : ''}}>1960</option>
                    <option value="1961"{{($serie->date_release === '1961') ? 'Selected' : ''}}>1961</option>
                    <option value="1962"{{($serie->date_release === '1962') ? 'Selected' : ''}}>1962</option>
                    <option value="1963"{{($serie->date_release === '1963') ? 'Selected' : ''}}>1963</option>
                    <option value="1964"{{($serie->date_release === '1964') ? 'Selected' : ''}}>1964</option>
                    <option value="1965"{{($serie->date_release === '1965') ? 'Selected' : ''}}>1965</option>
                    <option value="1966"{{($serie->date_release === '1966') ? 'Selected' : ''}}>1966</option>
                    <option value="1967"{{($serie->date_release === '1967') ? 'Selected' : ''}}>1967</option>
                    <option value="1968"{{($serie->date_release === '1968') ? 'Selected' : ''}}>1968</option>
                    <option value="1969"{{($serie->date_release === '1969') ? 'Selected' : ''}}>1969</option>
                    <option value="1970"{{($serie->date_release === '1970') ? 'Selected' : ''}}>1970</option>
                    <option value="1971"{{($serie->date_release === '1971') ? 'Selected' : ''}}>1971</option>
                    <option value="1972"{{($serie->date_release === '1972') ? 'Selected' : ''}}>1972</option>
                    <option value="1973"{{($serie->date_release === '1973') ? 'Selected' : ''}}>1973</option>
                    <option value="1974"{{($serie->date_release === '1974') ? 'Selected' : ''}}>1974</option>
                    <option value="1975"{{($serie->date_release === '1975') ? 'Selected' : ''}}>1975</option>
                    <option value="1976"{{($serie->date_release === '1976') ? 'Selected' : ''}}>1976</option>
                    <option value="1977"{{($serie->date_release === '1977') ? 'Selected' : ''}}>1977</option>
                    <option value="1978"{{($serie->date_release === '1978') ? 'Selected' : ''}}>1978</option>
                    <option value="1979"{{($serie->date_release === '1979') ? 'Selected' : ''}}>1979</option>
                    <option value="1980"{{($serie->date_release === '1980') ? 'Selected' : ''}}>1980</option>
                    <option value="1981"{{($serie->date_release === '1981') ? 'Selected' : ''}}>1981</option>
                    <option value="1982"{{($serie->date_release === '1982') ? 'Selected' : ''}}>1982</option>
                    <option value="1983"{{($serie->date_release === '1983') ? 'Selected' : ''}}>1983</option>
                    <option value="1984"{{($serie->date_release === '1984') ? 'Selected' : ''}}>1984</option>
                    <option value="1985"{{($serie->date_release === '1985') ? 'Selected' : ''}}>1985</option>
                    <option value="1986"{{($serie->date_release === '1986') ? 'Selected' : ''}}>1986</option>
                    <option value="1987"{{($serie->date_release === '1987') ? 'Selected' : ''}}>1987</option>
                    <option value="1988"{{($serie->date_release === '1988') ? 'Selected' : ''}}>1988</option>
                    <option value="1989"{{($serie->date_release === '1989') ? 'Selected' : ''}}>1989</option>
                    <option value="1990"{{($serie->date_release === '1990') ? 'Selected' : ''}}>1990</option>
                    <option value="1991"{{($serie->date_release === '1991') ? 'Selected' : ''}}>1991</option>
                    <option value="1992"{{($serie->date_release === '1992') ? 'Selected' : ''}}>1992</option>
                    <option value="1993"{{($serie->date_release === '1993') ? 'Selected' : ''}}>1993</option>
                    <option value="1994"{{($serie->date_release === '1994') ? 'Selected' : ''}}>1994</option>
                    <option value="1995"{{($serie->date_release === '1995') ? 'Selected' : ''}}>1995</option>
                    <option value="1996"{{($serie->date_release === '1996') ? 'Selected' : ''}}>1996</option>
                    <option value="1997"{{($serie->date_release === '1997') ? 'Selected' : ''}}>1997</option>
                    <option value="1998"{{($serie->date_release === '1998') ? 'Selected' : ''}}>1998</option>
                    <option value="1999"{{($serie->date_release === '1999') ? 'Selected' : ''}}>1999</option>
                    <option value="2000"{{($serie->date_release === '2000') ? 'Selected' : ''}}>2000</option>
                    <option value="2001"{{($serie->date_release === '2001') ? 'Selected' : ''}}>2001</option>
                    <option value="2002"{{($serie->date_release === '2002') ? 'Selected' : ''}}>2002</option>
                    <option value="2003"{{($serie->date_release === '2003') ? 'Selected' : ''}}>2003</option>
                    <option value="2004"{{($serie->date_release === '2004') ? 'Selected' : ''}}>2004</option>
                    <option value="2005"{{($serie->date_release === '2005') ? 'Selected' : ''}}>2005</option>
                    <option value="2006"{{($serie->date_release === '2006') ? 'Selected' : ''}}>2006</option>
                    <option value="2007"{{($serie->date_release === '2007') ? 'Selected' : ''}}>2007</option>
                    <option value="2008"{{($serie->date_release === '2008') ? 'Selected' : ''}}>2008</option>
                    <option value="2009"{{($serie->date_release === '2009') ? 'Selected' : ''}}>2009</option>
                    <option value="2010"{{($serie->date_release === '2010') ? 'Selected' : ''}}>2010</option>
                    <option value="2011"{{($serie->date_release === '2011') ? 'Selected' : ''}}>2011</option>
                    <option value="2012"{{($serie->date_release === '2012') ? 'Selected' : ''}}>2012</option>
                    <option value="2013"{{($serie->date_release === '2013') ? 'Selected' : ''}}>2013</option>
                    <option value="2014"{{($serie->date_release === '2014') ? 'Selected' : ''}}>2014</option>
                    <option value="2015"{{($serie->date_release === '2015') ? 'Selected' : ''}}>2015</option>
                    <option value="2016"{{($serie->date_release === '2016') ? 'Selected' : ''}}>2016</option>
                    <option value="2017"{{($serie->date_release === '2017') ? 'Selected' : ''}}>2017</option>
                    <option value="2018"{{($serie->date_release === '2018') ? 'Selected' : ''}}>2018</option>
                    <option value="2019"{{($serie->date_release === '2019') ? 'Selected' : ''}}>2019</option>
                    <option value="2020"{{($serie->date_release === '2020') ? 'Selected' : ''}}>2020</option>
                    <option value="2021"{{($serie->date_release === '2021') ? 'Selected' : ''}}>2021</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{ $serie->description }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Age Select</label>
                <select name="age_classification" data-role="select">
                    <option selected>Select Age Classification</option>
                    <option value="Rated G: General audiences – All ages admitted" {{($serie->age_classification === 'Rated G: General audiences – All ages admitted') ? 'Selected' : ''}}>Rated G: General audiences – All ages admitted</option>
                    <option value="Rated PG: Parental guidance suggested – Some material may not be suitable for children."{{($serie->age_classification === 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.') ? 'Selected' : ''}}>Rated PG: Parental guidance suggested – Some material may not be suitable for children.</option>
                    <option value="Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13."{{($serie->age_classification === 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.') ? 'Selected' : ''}}>Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.</option>
                    <option value="Rated R: Restricted – Under 17 requires accompanying parent or adult guardian."{{($serie->age_classification === 'Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.') ? 'Selected' : ''}}>Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.</option>
                    <option value="Rated NC-17: Adults Only – No one 17 and under admitted."{{($serie->age_classification === 'Rated NC-17: Adults Only – No one 17 and under admitted.') ? 'Selected' : ''}}>Rated NC-17: Adults Only – No one 17 and under admitted.</option>
                </select>
            </div>
            <div class="form-group">
                <label>Country :</label>
                <select name="country" data-role="select">
                    <option value="أفغانستان"{{($serie->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="ألبانيا"{{($serie->country === 'ألبانيا') ? 'Selected' : ''}}>ألبانيا</option>
                    <option value="الجزائر"{{($serie->country === 'الجزائر') ? 'Selected' : ''}}>الجزائر</option>
                    <option value="أندورا"{{($serie->country === 'أندورا') ? 'Selected' : ''}}>أندورا</option>
                    <option value="أنغولا"{{($serie->country === 'أنغولا') ? 'Selected' : ''}}>أنغولا</option>
                    <option value="أنتيغوا وباربودا"{{($serie->country === 'أنتيغوا وباربودا') ? 'Selected' : ''}}>أنتيغوا وباربودا</option>
                    <option value="الأرجنتين"{{($serie->country === 'الأرجنتين') ? 'Selected' : ''}}>الأرجنتين</option>
                    <option value="أرمينيا"{{($serie->country === 'أرمينيا') ? 'Selected' : ''}}>أرمينيا</option>
                    <option value="أستراليا"{{($serie->country === 'أستراليا') ? 'Selected' : ''}}>أستراليا</option>
                    <option value="النمسا"{{($serie->country === 'النمسا') ? 'Selected' : ''}}>النمسا</option>
                    <option value="أذربيجان"{{($serie->country === 'أذربيجان') ? 'Selected' : ''}}>أذربيجان</option>
                    <option value="البهاما"{{($serie->country === 'البهاما') ? 'Selected' : ''}}>البهاما</option>
                    <option value="البحرين"{{($serie->country === 'البحرين') ? 'Selected' : ''}}>البحرين</option>
                    <option value="بنغلاديش"{{($serie->country === 'بنغلاديش') ? 'Selected' : ''}}>بنغلاديش</option>
                    <option value="باربادوس"{{($serie->country === 'باربادوس') ? 'Selected' : ''}}>باربادوس</option>
                    <option value="بيلاروسيا"{{($serie->country === 'بيلاروسيا') ? 'Selected' : ''}}>بيلاروسيا</option>
                    <option value="بلجيكا"{{($serie->country === 'بلجيكا') ? 'Selected' : ''}}>بلجيكا</option>
                    <option value="بليز"{{($serie->country === 'بليز') ? 'Selected' : ''}}>بليز</option>
                    <option value="بنين"{{($serie->country === 'بنين') ? 'Selected' : ''}}>بنين</option>
                    <option value="بوتان"{{($serie->country === 'بوتان') ? 'Selected' : ''}}>بوتان</option>
                    <option value="بوليفيا"{{($serie->country === 'بوليفيا') ? 'Selected' : ''}}>بوليفيا</option>
                    <option value="البوسنة والهرسك"{{($serie->country === 'البوسنة والهرسك') ? 'Selected' : ''}}>البوسنة والهرسك</option>
                    <option value="بوتسوانا"{{($serie->country === 'بوتسوانا') ? 'Selected' : ''}}>بوتسوانا</option>
                    <option value="البرازيل"{{($serie->country === 'البرازيل') ? 'Selected' : ''}}>البرازيل</option>
                    <option value="بروناي"{{($serie->country === 'بروناي') ? 'Selected' : ''}}>بروناي</option>
                    <option value="بلغاريا"{{($serie->country === 'بلغاريا') ? 'Selected' : ''}}>بلغاريا</option>
                    <option value="بوركينا فاسو"{{($serie->country === 'بوركينا فاسو') ? 'Selected' : ''}}>بوركينا فاسو</option>
                    <option value="بوروندي"{{($serie->country === 'بوروندي') ? 'Selected' : ''}}>بوروندي</option>
                    <option value="كمبوديا"{{($serie->country === 'كمبوديا') ? 'Selected' : ''}}>كمبوديا</option>
                    <option value="الكاميرون"{{($serie->country === 'الكاميرون') ? 'Selected' : ''}}>الكاميرون</option>
                    <option value="كندا"{{($serie->country === 'كندا') ? 'Selected' : ''}}>كندا</option>
                    <option value="الرأس الأخضر"{{($serie->country === 'الرأس الأخضر') ? 'Selected' : ''}}>الرأس الأخضر</option>
                    <option value="جمهورية أفريقيا الوسطى"{{($serie->country === 'جمهورية أفريقيا الوسطى') ? 'Selected' : ''}}>جمهورية أفريقيا الوسطى</option>
                    <option value="تشاد"{{($serie->country === 'تشاد') ? 'Selected' : ''}}>تشاد</option>
                    <option value="تشيلي"{{($serie->country === 'تشيلي') ? 'Selected' : ''}}>تشيلي</option>
                    <option value="الصين"{{($serie->country === 'الصين') ? 'Selected' : ''}}>الصين</option>
                    <option value="كولومبيا"{{($serie->country === 'كولومبيا') ? 'Selected' : ''}}>كولومبيا</option>
                    <option value="جزر القمر"{{($serie->country === 'جزر القمر') ? 'Selected' : ''}}>جزر القمر</option>
                    <option value="كوستاريكا"{{($serie->country === 'كوستاريكا') ? 'Selected' : ''}}>كوستاريكا</option>
                    <option value="ساحل العاج"{{($serie->country === 'ساحل العاج') ? 'Selected' : ''}}>ساحل العاج</option>
                    <option value="كرواتيا"{{($serie->country === 'كرواتيا') ? 'Selected' : ''}}>كرواتيا</option>
                    <option value="كوبا"{{($serie->country === 'كوبا') ? 'Selected' : ''}}>كوبا</option>
                    <option value="قبرص"{{($serie->country === 'قبرص') ? 'Selected' : ''}}>قبرص</option>
                    <option value="التشيك"{{($serie->country === 'التشيك') ? 'Selected' : ''}}>التشيك</option>
                    <option value="جمهورية الكونغو الديمقراطية"{{($serie->country === 'جمهورية الكونغو الديمقراطية') ? 'Selected' : ''}}>جمهورية الكونغو الديمقراطية</option>
                    <option value="الدنمارك"{{($serie->country === 'الدنمارك') ? 'Selected' : ''}}>الدنمارك</option>
                    <option value="جيبوتي"{{($serie->country === 'جيبوتي') ? 'Selected' : ''}}>جيبوتي</option>
                    <option value="دومينيكا"{{($serie->country === 'دومينيكا') ? 'Selected' : ''}}>دومينيكا</option>
                    <option value="جمهورية الدومينيكان"{{($serie->country === 'جمهورية الدومينيكان') ? 'Selected' : ''}}>جمهورية الدومينيكان</option>
                    <option value="تيمور الشرقية"{{($serie->country === 'تيمور الشرقية') ? 'Selected' : ''}}>تيمور الشرقية</option>
                    <option value="الإكوادور"{{($serie->country === 'الإكوادور') ? 'Selected' : ''}}>الإكوادور</option>
                    <option value="مصر"{{($serie->country === 'مصر') ? 'Selected' : ''}}>مصر</option>
                    <option value="السلفادور"{{($serie->country === 'السلفادور') ? 'Selected' : ''}}>السلفادور</option>
                    <option value="غينيا الاستوائية"{{($serie->country === 'غينيا الاستوائية') ? 'Selected' : ''}}>غينيا الاستوائية</option>
                    <option value="إريتريا"{{($serie->country === 'إريتريا') ? 'Selected' : ''}}>إريتريا</option>
                    <option value="إستونيا"{{($serie->country === 'إستونيا') ? 'Selected' : ''}}>إستونيا</option>
                    <option value="إثيوبيا"{{($serie->country === 'إثيوبيا') ? 'Selected' : ''}}>إثيوبيا</option>
                    <option value="فيجي"{{($serie->country === 'فيجي') ? 'Selected' : ''}}>فيجي</option>
                    <option value="فنلندا"{{($serie->country === 'فنلندا') ? 'Selected' : ''}}>فنلندا</option>
                    <option value="فرنسا"{{($serie->country === 'فرنسا') ? 'Selected' : ''}}>فرنسا</option>
                    <option value="الغابون"{{($serie->country === 'الغابون') ? 'Selected' : ''}}>الغابون</option>
                    <option value="غامبيا"{{($serie->country === 'غامبيا') ? 'Selected' : ''}}>غامبيا</option>
                    <option value="جورجيا"{{($serie->country === 'جورجيا') ? 'Selected' : ''}}>جورجيا</option>
                    <option value="ألمانيا"{{($serie->country === 'ألمانيا') ? 'Selected' : ''}}>ألمانيا</option>
                    <option value="غانا"{{($serie->country === 'غانا') ? 'Selected' : ''}}>غانا</option>
                    <option value="اليونان"{{($serie->country === 'اليونان') ? 'Selected' : ''}}>اليونان</option>
                    <option value="جرينادا"{{($serie->country === 'جرينادا') ? 'Selected' : ''}}>جرينادا</option>
                    <option value="غواتيمالا"{{($serie->country === 'غواتيمالا') ? 'Selected' : ''}}>غواتيمالا</option>
                    <option value="غينيا"{{($serie->country === 'غينيا') ? 'Selected' : ''}}>غينيا</option>
                    <option value="غينيا بيساو"{{($serie->country === 'غينيا بيساو') ? 'Selected' : ''}}>غينيا بيساو</option>
                    <option value="غويانا"{{($serie->country === 'غويانا') ? 'Selected' : ''}}>غويانا</option>
                    <option value="هايتي"{{($serie->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="هندوراس"{{($serie->country === 'هندوراس') ? 'Selected' : ''}}>هندوراس</option>
                    <option value="المجر"{{($serie->country === 'المجر') ? 'Selected' : ''}}>المجر</option>
                    <option value="آيسلندا"{{($serie->country === 'آيسلندا') ? 'Selected' : ''}}>آيسلندا</option>
                    <option value="الهند"{{($serie->country === 'الهند') ? 'Selected' : ''}}>الهند</option>
                    <option value="إندونيسيا"{{($serie->country === 'إندونيسيا') ? 'Selected' : ''}}>إندونيسيا</option>
                    <option value="إيران"{{($serie->country === 'إيران') ? 'Selected' : ''}}>إيران</option>
                    <option value="العراق"{{($serie->country === 'العراق') ? 'Selected' : ''}}>العراق</option>
                    <option value="جمهورية أيرلندا"{{($serie->country === 'جمهورية أيرلندا') ? 'Selected' : ''}}>جمهورية أيرلندا</option>
                    <option value="فلسطين"{{($serie->country === 'فلسطين') ? 'Selected' : ''}}>فلسطين</option>
                    <option value="إيطاليا"{{($serie->country === 'إيطاليا') ? 'Selected' : ''}}>إيطاليا</option>
                    <option value="جامايكا"{{($serie->country === 'جامايكا') ? 'Selected' : ''}}>جامايكا</option>
                    <option value="اليابان"{{($serie->country === 'اليابان') ? 'Selected' : ''}}>اليابان</option>
                    <option value="الأردن"{{($serie->country === 'الأردن') ? 'Selected' : ''}}>الأردن</option>
                    <option value="كازاخستان"{{($serie->country === 'كازاخستان') ? 'Selected' : ''}}>كازاخستان</option>
                    <option value="كينيا"{{($serie->country === 'كينيا') ? 'Selected' : ''}}>كينيا</option>
                    <option value="كيريباتي"{{($serie->country === 'كيريباتي') ? 'Selected' : ''}}>كيريباتي</option>
                    <option value="الكويت"{{($serie->country === 'الكويت') ? 'Selected' : ''}}>الكويت</option>
                    <option value="قرغيزستان"{{($serie->country === 'قرغيزستان') ? 'Selected' : ''}}>قرغيزستان</option>
                    <option value="لاوس"{{($serie->country === 'لاوس') ? 'Selected' : ''}}>لاوس</option>
                    <option value="لاتفيا"{{($serie->country === 'لاتفيا') ? 'Selected' : ''}}>لاتفيا</option>
                    <option value="لبنان"{{($serie->country === 'لبنان') ? 'Selected' : ''}}>لبنان</option>
                    <option value="ليسوتو"{{($serie->country === 'ليسوتو') ? 'Selected' : ''}}>ليسوتو</option>
                    <option value="ليبيريا"{{($serie->country === 'ليبيريا') ? 'Selected' : ''}}>ليبيريا</option>
                    <option value="ليبيا"{{($serie->country === 'ليبيا') ? 'Selected' : ''}}>ليبيا</option>
                    <option value="ليختنشتاين"{{($serie->country === 'ليختنشتاين') ? 'Selected' : ''}}>ليختنشتاين</option>
                    <option value="ليتوانيا"{{($serie->country === 'ليتوانيا') ? 'Selected' : ''}}>ليتوانيا</option>
                    <option value="لوكسمبورغ"{{($serie->country === 'لوكسمبورغ') ? 'Selected' : ''}}>لوكسمبورغ</option>
                    <option value="مدغشقر"{{($serie->country === 'مدغشقر') ? 'Selected' : ''}}>مدغشقر</option>
                    <option value="مالاوي"{{($serie->country === 'مالاوي') ? 'Selected' : ''}}>مالاوي</option>
                    <option value="ماليزيا"{{($serie->country === 'ماليزيا') ? 'Selected' : ''}}>ماليزيا</option>
                    <option value="جزر المالديف"{{($serie->country === 'جزر المالديف') ? 'Selected' : ''}}>جزر المالديف</option>
                    <option value="مالي"{{($serie->country === 'مالي') ? 'Selected' : ''}}>مالي</option>
                    <option value="مالطا"{{($serie->country === 'مالطا') ? 'Selected' : ''}}>مالطا</option>
                    <option value="جزر مارشال"{{($serie->country === 'جزر مارشال') ? 'Selected' : ''}}>جزر مارشال</option>
                    <option value="موريتانيا"{{($serie->country === 'موريتانيا') ? 'Selected' : ''}}>موريتانيا</option>
                    <option value="موريشيوس"{{($serie->country === 'موريشيوس') ? 'Selected' : ''}}>موريشيوس</option>
                    <option value="المكسيك"{{($serie->country === 'المكسيك') ? 'Selected' : ''}}>المكسيك</option>
                    <option value="مايكرونيزيا"{{($serie->country === 'مايكرونيزيا') ? 'Selected' : ''}}>مايكرونيزيا</option>
                    <option value="مولدوفا"{{($serie->country === 'مولدوفا') ? 'Selected' : ''}}>مولدوفا</option>
                    <option value="موناكو"{{($serie->country === 'موناكو') ? 'Selected' : ''}}>موناكو</option>
                    <option value="منغوليا"{{($serie->country === 'منغوليا') ? 'Selected' : ''}}>منغوليا</option>
                    <option value="الجبل الأسود"{{($serie->country === 'الجبل الأسود') ? 'Selected' : ''}}>الجبل الأسود</option>
                    <option value="المغرب"{{($serie->country === 'المغرب') ? 'Selected' : ''}}>المغرب</option>
                    <option value="موزمبيق"{{($serie->country === 'موزمبيق') ? 'Selected' : ''}}>موزمبيق</option>
                    <option value="بورما"{{($serie->country === 'بورما') ? 'Selected' : ''}}>بورما</option>
                    <option value="ناميبيا"{{($serie->country === 'ناميبيا') ? 'Selected' : ''}}>ناميبيا</option>
                    <option value="ناورو"{{($serie->country === 'ناورو') ? 'Selected' : ''}}>ناورو</option>
                    <option value="نيبال"{{($serie->country === 'نيبال') ? 'Selected' : ''}}>نيبال</option>
                    <option value="هولندا"{{($serie->country === 'هولندا') ? 'Selected' : ''}}>هولندا</option>
                    <option value="نيوزيلندا"{{($serie->country === 'نيوزيلندا') ? 'Selected' : ''}}>نيوزيلندا</option>
                    <option value="نيكاراجوا"{{($serie->country === 'نيكاراجوا') ? 'Selected' : ''}}>نيكاراجوا</option>
                    <option value="النيجر"{{($serie->country === 'النيجر') ? 'Selected' : ''}}>النيجر</option>
                    <option value="نيجيريا"{{($serie->country === 'نيجيريا') ? 'Selected' : ''}}>نيجيريا</option>
                    <option value="كوريا الشمالية"{{($serie->country === 'كوريا الشمالية') ? 'Selected' : ''}}>كوريا الشمالية</option>
                    <option value="النرويج"{{($serie->country === 'النرويج') ? 'Selected' : ''}}>النرويج</option>
                    <option value="سلطنة عمان"{{($serie->country === 'سلطنة عمان') ? 'Selected' : ''}}>سلطنة عمان</option>
                    <option value="باكستان"{{($serie->country === 'باكستان') ? 'Selected' : ''}}>باكستان</option>
                    <option value="بالاو"{{($serie->country === 'بالاو') ? 'Selected' : ''}}>بالاو</option>
                    <option value="بنما"{{($serie->country === 'بنما') ? 'Selected' : ''}}>بنما</option>
                    <option value="بابوا غينيا الجديدة"{{($serie->country === 'بابوا غينيا الجديدة') ? 'Selected' : ''}}>بابوا غينيا الجديدة</option>
                    <option value="باراغواي"{{($serie->country === 'باراغواي') ? 'Selected' : ''}}>باراغواي</option>
                    <option value="بيرو"{{($serie->country === 'بيرو') ? 'Selected' : ''}}>بيرو</option>
                    <option value="الفلبين"{{($serie->country === 'الفلبين') ? 'Selected' : ''}}>الفلبين</option>
                    <option value="بولندا"{{($serie->country === 'بولندا') ? 'Selected' : ''}}>بولندا</option>
                    <option value="البرتغال"{{($serie->country === 'البرتغال') ? 'Selected' : ''}}>البرتغال</option>
                    <option value="قطر"{{($serie->country === 'قطر') ? 'Selected' : ''}}>قطر</option>
                    <option value="جمهورية الكونغو"{{($serie->country === 'جمهورية الكونغو') ? 'Selected' : ''}}>جمهورية الكونغو</option>
                    <option value="جمهورية مقدونيا"{{($serie->country === 'جمهورية مقدونيا') ? 'Selected' : ''}}>جمهورية مقدونيا</option>
                    <option value="رومانيا"{{($serie->country === 'رومانيا') ? 'Selected' : ''}}>رومانيا</option>
                    <option value="روسيا"{{($serie->country === 'روسيا') ? 'Selected' : ''}}>روسيا</option>
                    <option value="رواندا"{{($serie->country === 'رواندا') ? 'Selected' : ''}}>رواندا</option>
                    <option value="سانت كيتس ونيفيس"{{($serie->country === 'سانت كيتس ونيفيس') ? 'Selected' : ''}}>سانت كيتس ونيفيس</option>
                    <option value="سانت لوسيا"{{($serie->country === 'سانت لوسيا') ? 'Selected' : ''}}>سانت لوسيا</option>
                    <option value="سانت فنسينت والجرينادينز"{{($serie->country === 'سانت فنسينت والجرينادينز') ? 'Selected' : ''}}>سانت فنسينت والجرينادينز</option>
                    <option value="ساموا"{{($serie->country === 'ساموا') ? 'Selected' : ''}}>ساموا</option>
                    <option value="سان مارينو"{{($serie->country === 'سان مارينو') ? 'Selected' : ''}}>سان مارينو</option>
                    <option value="ساو تومي وبرينسيب"{{($serie->country === 'ساو تومي وبرينسيب') ? 'Selected' : ''}}>ساو تومي وبرينسيب</option>
                    <option value="السعودية"{{($serie->country === 'السعودية') ? 'Selected' : ''}}>السعودية</option>
                    <option value="السنغال"{{($serie->country === 'السنغال') ? 'Selected' : ''}}>السنغال</option>
                    <option value="صربيا"{{($serie->country === 'صربيا') ? 'Selected' : ''}}>صربيا</option>
                    <option value="سيشيل"{{($serie->country === 'سيشيل') ? 'Selected' : ''}}>سيشيل</option>
                    <option value="سيراليون"{{($serie->country === 'سيراليون') ? 'Selected' : ''}}>سيراليون</option>
                    <option value="سنغافورة"{{($serie->country === 'سنغافورة') ? 'Selected' : ''}}>سنغافورة</option>
                    <option value="سلوفاكيا"{{($serie->country === 'سلوفاكيا') ? 'Selected' : ''}}>سلوفاكيا</option>
                    <option value="سلوفينيا"{{($serie->country === 'سلوفينيا') ? 'Selected' : ''}}>سلوفينيا</option>
                    <option value="جزر سليمان"{{($serie->country === 'جزر سليمان') ? 'Selected' : ''}}>جزر سليمان</option>
                    <option value="الصومال"{{($serie->country === 'الصومال') ? 'Selected' : ''}}>الصومال</option>
                    <option value="جنوب أفريقيا"{{($serie->country === 'جنوب أفريقيا') ? 'Selected' : ''}}>جنوب أفريقيا</option>
                    <option value="كوريا الجنوبية"{{($serie->country === 'كوريا الجنوبية') ? 'Selected' : ''}}>كوريا الجنوبية</option>
                    <option value="جنوب السودان"{{($serie->country === 'جنوب السودان') ? 'Selected' : ''}}>جنوب السودان</option>
                    <option value="إسبانيا"{{($serie->country === 'إسبانيا') ? 'Selected' : ''}}>إسبانيا</option>
                    <option value="سريلانكا"{{($serie->country === 'سريلانكا') ? 'Selected' : ''}}>سريلانكا</option>
                    <option value="السودان"{{($serie->country === 'السودان') ? 'Selected' : ''}}>السودان</option>
                    <option value="سورينام"{{($serie->country === 'سورينام') ? 'Selected' : ''}}>سورينام</option>
                    <option value="سوازيلاند"{{($serie->country === 'سوازيلاند') ? 'Selected' : ''}}>سوازيلاند</option>
                    <option value="السويد"{{($serie->country === 'السويد') ? 'Selected' : ''}}>السويد</option>
                    <option value="سويسرا"{{($serie->country === 'سويسرا') ? 'Selected' : ''}}>سويسرا</option>
                    <option value="سوريا"{{($serie->country === 'سوريا') ? 'Selected' : ''}}>سوريا</option>
                    <option value="طاجيكستان"{{($serie->country === 'طاجيكستان') ? 'Selected' : ''}}>طاجيكستان</option>
                    <option value="تنزانيا"{{($serie->country === 'تنزانيا') ? 'Selected' : ''}}>تنزانيا</option>
                    <option value="تايلاند"{{($serie->country === 'تايلاند') ? 'Selected' : ''}}>تايلاند</option>
                    <option value="توغو"{{($serie->country === 'توغو') ? 'Selected' : ''}}>توغو</option>
                    <option value="تونجا"{{($serie->country === 'تونجا') ? 'Selected' : ''}}>تونجا</option>
                    <option value="ترينيداد وتوباغو"{{($serie->country === 'ترينيداد وتوباغو') ? 'Selected' : ''}}>ترينيداد وتوباغو</option>
                    <option value="تونس"{{($serie->country === 'تونس') ? 'Selected' : ''}}>تونس</option>
                    <option value="تركيا"{{($serie->country === 'تركيا') ? 'Selected' : ''}}>تركيا</option>
                    <option value="تركمانستان"{{($serie->country === 'تركمانستان') ? 'Selected' : ''}}>تركمانستان</option>
                    <option value="توفالو"{{($serie->country === 'توفالو') ? 'Selected' : ''}}>توفالو</option>
                    <option value="أوغندا"{{($serie->country === 'أوغندا') ? 'Selected' : ''}}>أوغندا</option>
                    <option value="أوكرانيا"{{($serie->country === 'أوكرانيا') ? 'Selected' : ''}}>أوكرانيا</option>
                    <option value="الإمارات العربية المتحدة"{{($serie->country === 'الإمارات العربية المتحدة') ? 'Selected' : ''}}>الإمارات العربية المتحدة</option>
                    <option value="المملكة المتحدة"{{($serie->country === 'المملكة المتحدة') ? 'Selected' : ''}}>المملكة المتحدة</option>
                    <option value="الولايات المتحدة"{{($serie->country === 'الولايات المتحدة') ? 'Selected' : ''}}>الولايات المتحدة</option>
                    <option value="أوروغواي"{{($serie->country === 'أوروغواي') ? 'Selected' : ''}}>أوروغواي</option>
                    <option value="أوزبكستان"{{($serie->country === 'أوزبكستان') ? 'Selected' : ''}}>أوزبكستان</option>
                    <option value="فانواتو"{{($serie->country === 'فانواتو') ? 'Selected' : ''}}>فانواتو</option>
                    <option value="فنزويلا"{{($serie->country === 'فنزويلا') ? 'Selected' : ''}}>فنزويلا</option>
                    <option value="فيتنام"{{($serie->country === 'فيتنام') ? 'Selected' : ''}}>فيتنام</option>
                    <option value="اليمن"{{($serie->country === 'اليمن') ? 'Selected' : ''}}>اليمن</option>
                    <option value="زامبيا"{{($serie->country === 'زامبيا') ? 'Selected' : ''}}>زامبيا</option>
                    <option value="زيمبابوي"{{($serie->country === 'زيمبابوي') ? 'Selected' : ''}}>زيمبابوي</option>
                </select>
            </div>
            <div class="form-group">
                <label>IMDB</label>
                <input type="number" value="{{ $serie->imdb }}" name="imdb" step="0.01" min="0" class="metro-input">
            </div>
            <div class="form-group">
                <label>Language</label>
                <select name="language" data-role="select">
                    <option value="الإنجليزية"{{($serie->country === 'الإنجليزية') ? 'Selected' : ''}}>الإنجليزية</option>
                    <option value="العربية"{{($serie->country === 'العربية') ? 'Selected' : ''}}>العربية</option>
                    <option value="الفرنسية"{{($serie->country === 'الفرنسية') ? 'Selected' : ''}}>الفرنسية</option>
                    <option value="الإسبانية"{{($serie->country === 'الإسبانية') ? 'Selected' : ''}}>الإسبانية</option>
                    <option value="الألمانية"{{($serie->country === 'الألمانية') ? 'Selected' : ''}}>الألمانية</option>
                    <option value="الإيطالية"{{($serie->country === 'الإيطالية') ? 'Selected' : ''}}>الإيطالية</option>
                    <option value="الهندية"{{($serie->country === 'الهندية') ? 'Selected' : ''}}>الهندية</option>
                    <option value="الروسية"{{($serie->country === 'الروسية') ? 'Selected' : ''}}>الروسية</option>
                    <option value="البرتغالية"{{($serie->country === 'البرتغالية') ? 'Selected' : ''}}>البرتغالية</option>
                    <option value="التركية"{{($serie->country === 'التركية') ? 'Selected' : ''}}>التركية</option>
                    <option value="النرويجية"{{($serie->country === 'النرويجية') ? 'Selected' : ''}}>النرويجية</option>
                    <option value="الدانماركية"{{($serie->country === 'الدانماركية') ? 'Selected' : ''}}>الدانماركية</option>
                    <option value="اليابانية"{{($serie->country === 'اليابانية') ? 'Selected' : ''}}>اليابانية</option>
                    <option value="الكورية"{{($serie->country === 'الكورية') ? 'Selected' : ''}}>الكورية</option>
                    <option value="الصينية"{{($serie->country === 'الصينية') ? 'Selected' : ''}}>الصينية</option>
                </select>
            </div>

            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube_link" value="{{ $serie->youtube_link }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Class</label>
                <select name="class_serie" data-role="select">
                    <option value="مسلسلات أجنبية"{{($serie->class_serie === 'مسلسلات أجنبية') ? 'Selected' : ''}}>مسلسلات أجنبية</option>
                    <option value="مسلسلات تركية"{{($serie->class_serie === 'مسلسلات تركية') ? 'Selected' : ''}}>مسلسلات تركية</option>
                    <option value="مسلسلات أسيوية"{{($serie->class_serie === 'مسلسلات أسيوية') ? 'Selected' : ''}}>مسلسلات أسيوية</option>
                    <option value="مسلسلات هندية"{{($serie->class_serie === 'مسلسلات هندية') ? 'Selected' : ''}}>مسلسلات هندية</option>
                    <option value="مسلسلات عربية"{{($serie->class_serie === 'مسلسلات عربية') ? 'Selected' : ''}}>مسلسلات عربية</option>
                </select>
            </div>
            <div class="form-group">
                <label>Producteur </label>
                <input type="text" name="name_producer" value="{{ $serie->name_producer }}"  class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 1</label>
                <input type="text" name="name_actor1" value="{{ $serie->name_actor1 }}" class="metro-input">
                <label>real name Actor 1</label>
                <input type="text" name="real_name_actor1" value="{{ $serie->real_name_actor1 }}" class="metro-input">
                <label>image Actor 1</label>
                <input type="text" name="photo_actor1" value="{{ $serie->photo_actor1 }}"  class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 2</label>
                <input type="text" name="name_actor2" value="{{ $serie->name_actor2 }}" class="metro-input">
                <label>real name Actor 2</label>
                <input type="text" name="real_name_actor2" value="{{ $serie->real_name_actor2 }}" class="metro-input">
                <label>image Actor 2</label>
                <input type="text" name="photo_actor2" value="{{ $serie->photo_actor2 }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Actor 3</label>
                <input type="text" name="name_actor3" value="{{ $serie->name_actor3 }}" class="metro-input">
                <label>real name Actor 3</label>
                <input type="text" name="real_name_actor3" value="{{ $serie->real_name_actor3 }}" class="metro-input">
                <label>image Actor 3</label>
                <input type="text" name="photo_actor3" value="{{ $serie->photo_actor3 }}"  class="metro-input">
            </div>
        <button class="btn btn-primary" type="submit">Edit Serie</button>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ $serie->serie_photo }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="serie_photo" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
              </div>
            </div>
          </div>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ $serie->image_poster_serie }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="image_poster_serie" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
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
