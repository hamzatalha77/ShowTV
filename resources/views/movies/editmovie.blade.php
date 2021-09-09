@php
    $categories = App\Models\Category::get();

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
    <form action="{{ route('movies.update',$movie->id) }}" method="POST" enctype="multipart/form-data" style="width: 60%;position: relative;left: 20%">
        @csrf
        @method('PUT')

        <div class="myform ">
            <div class="form-group">
                <label>Movie Name</label>
                <input type="text" name="movie_name" value="{{ $movie->movie_name }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tags" value="{{ $movie->tags }}" data-role="taginput"  class="mt-4" data-random-color="true">
            </div>
        <div class="form-group">
            <strong>Category:</strong>
            <select name="categories_id[]" class="form-control custom-select" data-role="select" multiple>
                @foreach($categories as $category)
                    <option value="{{$category->id }}"}} @if($movie->Categories->containsStrict('id', $category->id)) selected="selected" @endif>
                        {{ $category->category }}
                    </option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label>Date Release</label>


                <select name="date_release" data-role="select">
                    <option>year</option>
                    <option value="1900"{{($movie->date_release === '1900') ? 'Selected' : ''}}>1900</option>
                    <option value="1901"{{($movie->date_release === '1901') ? 'Selected' : ''}}>1901</option>
                    <option value="1902"{{($movie->date_release === '1902') ? 'Selected' : ''}}>1902</option>
                    <option value="1903"{{($movie->date_release === '1903') ? 'Selected' : ''}}>1903</option>
                    <option value="1904"{{($movie->date_release === '1904') ? 'Selected' : ''}}>1904</option>
                    <option value="1905"{{($movie->date_release === '1905') ? 'Selected' : ''}}>1905</option>
                    <option value="1906"{{($movie->date_release === '1906') ? 'Selected' : ''}}>1906</option>
                    <option value="1907"{{($movie->date_release === '1907') ? 'Selected' : ''}}>1907</option>
                    <option value="1908"{{($movie->date_release === '1908') ? 'Selected' : ''}}>1908</option>
                    <option value="1909"{{($movie->date_release === '1909') ? 'Selected' : ''}}>1909</option>
                    <option value="1910"{{($movie->date_release === '1910') ? 'Selected' : ''}}>1910</option>
                    <option value="1911"{{($movie->date_release === '1911') ? 'Selected' : ''}}>1911</option>
                    <option value="1912"{{($movie->date_release === '1912') ? 'Selected' : ''}}>1912</option>
                    <option value="1913"{{($movie->date_release === '1913') ? 'Selected' : ''}}>1913</option>
                    <option value="1914"{{($movie->date_release === '1914') ? 'Selected' : ''}}>1914</option>
                    <option value="1915"{{($movie->date_release === '1915') ? 'Selected' : ''}}>1915</option>
                    <option value="1916"{{($movie->date_release === '1916') ? 'Selected' : ''}}>1916</option>
                    <option value="1917"{{($movie->date_release === '1917') ? 'Selected' : ''}}>1917</option>
                    <option value="1918"{{($movie->date_release === '1918') ? 'Selected' : ''}}>1918</option>
                    <option value="1919"{{($movie->date_release === '1919') ? 'Selected' : ''}}>1919</option>
                    <option value="1920"{{($movie->date_release === '1920') ? 'Selected' : ''}}>1920</option>
                    <option value="1921"{{($movie->date_release === '1921') ? 'Selected' : ''}}>1921</option>
                    <option value="1922"{{($movie->date_release === '1922') ? 'Selected' : ''}}>1922</option>
                    <option value="1923"{{($movie->date_release === '1923') ? 'Selected' : ''}}>1923</option>
                    <option value="1924"{{($movie->date_release === '1924') ? 'Selected' : ''}}>1924</option>
                    <option value="1925"{{($movie->date_release === '1925') ? 'Selected' : ''}}>1925</option>
                    <option value="1926"{{($movie->date_release === '1926') ? 'Selected' : ''}}>1926</option>
                    <option value="1927"{{($movie->date_release === '1927') ? 'Selected' : ''}}>1927</option>
                    <option value="1928"{{($movie->date_release === '1928') ? 'Selected' : ''}}>1928</option>
                    <option value="1929"{{($movie->date_release === '1929') ? 'Selected' : ''}}>1929</option>
                    <option value="1930"{{($movie->date_release === '1930') ? 'Selected' : ''}}>1930</option>
                    <option value="1931"{{($movie->date_release === '1931') ? 'Selected' : ''}}>1931</option>
                    <option value="1932"{{($movie->date_release === '1932') ? 'Selected' : ''}}>1932</option>
                    <option value="1933"{{($movie->date_release === '1933') ? 'Selected' : ''}}>1933</option>
                    <option value="1934"{{($movie->date_release === '1934') ? 'Selected' : ''}}>1934</option>
                    <option value="1935"{{($movie->date_release === '1935') ? 'Selected' : ''}}>1935</option>
                    <option value="1936"{{($movie->date_release === '1936') ? 'Selected' : ''}}>1936</option>
                    <option value="1937"{{($movie->date_release === '1937') ? 'Selected' : ''}}>1937</option>
                    <option value="1938"{{($movie->date_release === '1938') ? 'Selected' : ''}}>1938</option>
                    <option value="1939"{{($movie->date_release === '1939') ? 'Selected' : ''}}>1939</option>
                    <option value="1940"{{($movie->date_release === '1940') ? 'Selected' : ''}}>1940</option>
                    <option value="1941"{{($movie->date_release === '1941') ? 'Selected' : ''}}>1941</option>
                    <option value="1942"{{($movie->date_release === '1942') ? 'Selected' : ''}}>1942</option>
                    <option value="1943"{{($movie->date_release === '1943') ? 'Selected' : ''}}>1943</option>
                    <option value="1944"{{($movie->date_release === '1944') ? 'Selected' : ''}}>1944</option>
                    <option value="1945"{{($movie->date_release === '1945') ? 'Selected' : ''}}>1945</option>
                    <option value="1946"{{($movie->date_release === '1946') ? 'Selected' : ''}}>1946</option>
                    <option value="1947"{{($movie->date_release === '1947') ? 'Selected' : ''}}>1947</option>
                    <option value="1948"{{($movie->date_release === '1948') ? 'Selected' : ''}}>1948</option>
                    <option value="1949"{{($movie->date_release === '1949') ? 'Selected' : ''}}>1949</option>
                    <option value="1950"{{($movie->date_release === '1950') ? 'Selected' : ''}}>1950</option>
                    <option value="1951"{{($movie->date_release === '1951') ? 'Selected' : ''}}>1951</option>
                    <option value="1952"{{($movie->date_release === '1952') ? 'Selected' : ''}}>1952</option>
                    <option value="1953"{{($movie->date_release === '1953') ? 'Selected' : ''}}>1953</option>
                    <option value="1954"{{($movie->date_release === '1954') ? 'Selected' : ''}}>1954</option>
                    <option value="1955"{{($movie->date_release === '1955') ? 'Selected' : ''}}>1955</option>
                    <option value="1956"{{($movie->date_release === '1956') ? 'Selected' : ''}}>1956</option>
                    <option value="1957"{{($movie->date_release === '1957') ? 'Selected' : ''}}>1957</option>
                    <option value="1958"{{($movie->date_release === '1958') ? 'Selected' : ''}}>1958</option>
                    <option value="1959"{{($movie->date_release === '1959') ? 'Selected' : ''}}>1959</option>
                    <option value="1960"{{($movie->date_release === '1960') ? 'Selected' : ''}}>1960</option>
                    <option value="1961"{{($movie->date_release === '1961') ? 'Selected' : ''}}>1961</option>
                    <option value="1962"{{($movie->date_release === '1962') ? 'Selected' : ''}}>1962</option>
                    <option value="1963"{{($movie->date_release === '1963') ? 'Selected' : ''}}>1963</option>
                    <option value="1964"{{($movie->date_release === '1964') ? 'Selected' : ''}}>1964</option>
                    <option value="1965"{{($movie->date_release === '1965') ? 'Selected' : ''}}>1965</option>
                    <option value="1966"{{($movie->date_release === '1966') ? 'Selected' : ''}}>1966</option>
                    <option value="1967"{{($movie->date_release === '1967') ? 'Selected' : ''}}>1967</option>
                    <option value="1968"{{($movie->date_release === '1968') ? 'Selected' : ''}}>1968</option>
                    <option value="1969"{{($movie->date_release === '1969') ? 'Selected' : ''}}>1969</option>
                    <option value="1970"{{($movie->date_release === '1970') ? 'Selected' : ''}}>1970</option>
                    <option value="1971"{{($movie->date_release === '1971') ? 'Selected' : ''}}>1971</option>
                    <option value="1972"{{($movie->date_release === '1972') ? 'Selected' : ''}}>1972</option>
                    <option value="1973"{{($movie->date_release === '1973') ? 'Selected' : ''}}>1973</option>
                    <option value="1974"{{($movie->date_release === '1974') ? 'Selected' : ''}}>1974</option>
                    <option value="1975"{{($movie->date_release === '1975') ? 'Selected' : ''}}>1975</option>
                    <option value="1976"{{($movie->date_release === '1976') ? 'Selected' : ''}}>1976</option>
                    <option value="1977"{{($movie->date_release === '1977') ? 'Selected' : ''}}>1977</option>
                    <option value="1978"{{($movie->date_release === '1978') ? 'Selected' : ''}}>1978</option>
                    <option value="1979"{{($movie->date_release === '1979') ? 'Selected' : ''}}>1979</option>
                    <option value="1980"{{($movie->date_release === '1980') ? 'Selected' : ''}}>1980</option>
                    <option value="1981"{{($movie->date_release === '1981') ? 'Selected' : ''}}>1981</option>
                    <option value="1982"{{($movie->date_release === '1982') ? 'Selected' : ''}}>1982</option>
                    <option value="1983"{{($movie->date_release === '1983') ? 'Selected' : ''}}>1983</option>
                    <option value="1984"{{($movie->date_release === '1984') ? 'Selected' : ''}}>1984</option>
                    <option value="1985"{{($movie->date_release === '1985') ? 'Selected' : ''}}>1985</option>
                    <option value="1986"{{($movie->date_release === '1986') ? 'Selected' : ''}}>1986</option>
                    <option value="1987"{{($movie->date_release === '1987') ? 'Selected' : ''}}>1987</option>
                    <option value="1988"{{($movie->date_release === '1988') ? 'Selected' : ''}}>1988</option>
                    <option value="1989"{{($movie->date_release === '1989') ? 'Selected' : ''}}>1989</option>
                    <option value="1990"{{($movie->date_release === '1990') ? 'Selected' : ''}}>1990</option>
                    <option value="1991"{{($movie->date_release === '1991') ? 'Selected' : ''}}>1991</option>
                    <option value="1992"{{($movie->date_release === '1992') ? 'Selected' : ''}}>1992</option>
                    <option value="1993"{{($movie->date_release === '1993') ? 'Selected' : ''}}>1993</option>
                    <option value="1994"{{($movie->date_release === '1994') ? 'Selected' : ''}}>1994</option>
                    <option value="1995"{{($movie->date_release === '1995') ? 'Selected' : ''}}>1995</option>
                    <option value="1996"{{($movie->date_release === '1996') ? 'Selected' : ''}}>1996</option>
                    <option value="1997"{{($movie->date_release === '1997') ? 'Selected' : ''}}>1997</option>
                    <option value="1998"{{($movie->date_release === '1998') ? 'Selected' : ''}}>1998</option>
                    <option value="1999"{{($movie->date_release === '1999') ? 'Selected' : ''}}>1999</option>
                    <option value="2000"{{($movie->date_release === '2000') ? 'Selected' : ''}}>2000</option>
                    <option value="2001"{{($movie->date_release === '2001') ? 'Selected' : ''}}>2001</option>
                    <option value="2002"{{($movie->date_release === '2002') ? 'Selected' : ''}}>2002</option>
                    <option value="2003"{{($movie->date_release === '2003') ? 'Selected' : ''}}>2003</option>
                    <option value="2004"{{($movie->date_release === '2004') ? 'Selected' : ''}}>2004</option>
                    <option value="2005"{{($movie->date_release === '2005') ? 'Selected' : ''}}>2005</option>
                    <option value="2006"{{($movie->date_release === '2006') ? 'Selected' : ''}}>2006</option>
                    <option value="2007"{{($movie->date_release === '2007') ? 'Selected' : ''}}>2007</option>
                    <option value="2008"{{($movie->date_release === '2008') ? 'Selected' : ''}}>2008</option>
                    <option value="2009"{{($movie->date_release === '2009') ? 'Selected' : ''}}>2009</option>
                    <option value="2010"{{($movie->date_release === '2010') ? 'Selected' : ''}}>2010</option>
                    <option value="2011"{{($movie->date_release === '2011') ? 'Selected' : ''}}>2011</option>
                    <option value="2012"{{($movie->date_release === '2012') ? 'Selected' : ''}}>2012</option>
                    <option value="2013"{{($movie->date_release === '2013') ? 'Selected' : ''}}>2013</option>
                    <option value="2014"{{($movie->date_release === '2014') ? 'Selected' : ''}}>2014</option>
                    <option value="2015"{{($movie->date_release === '2015') ? 'Selected' : ''}}>2015</option>
                    <option value="2016"{{($movie->date_release === '2016') ? 'Selected' : ''}}>2016</option>
                    <option value="2017"{{($movie->date_release === '2017') ? 'Selected' : ''}}>2017</option>
                    <option value="2018"{{($movie->date_release === '2018') ? 'Selected' : ''}}>2018</option>
                    <option value="2019"{{($movie->date_release === '2019') ? 'Selected' : ''}}>2019</option>
                    <option value="2020"{{($movie->date_release === '2020') ? 'Selected' : ''}}>2020</option>
                    <option value="2021"{{($movie->date_release === '2021') ? 'Selected' : ''}}>2021</option>

                </select>

            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{ $movie->description }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Age Select</label>
                <select name="age_classification" data-role="select">
                    <option selected>Select Age Classification</option>
                    <option value="Rated G: General audiences – All ages admitted" {{($movie->age_classification === 'Rated G: General audiences – All ages admitted') ? 'Selected' : ''}}>Rated G: General audiences – All ages admitted</option>
                    <option value="Rated PG: Parental guidance suggested – Some material may not be suitable for children."{{($movie->age_classification === 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.') ? 'Selected' : ''}}>Rated PG: Parental guidance suggested – Some material may not be suitable for children.</option>
                    <option value="Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13."{{($movie->age_classification === 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.') ? 'Selected' : ''}}>Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.</option>
                    <option value="Rated R: Restricted – Under 17 requires accompanying parent or adult guardian."{{($movie->age_classification === 'Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.') ? 'Selected' : ''}}>Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.</option>
                    <option value="Rated NC-17: Adults Only – No one 17 and under admitted."{{($movie->age_classification === 'Rated NC-17: Adults Only – No one 17 and under admitted.') ? 'Selected' : ''}}>Rated NC-17: Adults Only – No one 17 and under admitted.</option>
                </select>
            </div>
            <div class="form-group">
                <label>Country :</label>
                <select name="country" data-role="select">
                    <option value="أفغانستان"{{($movie->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="ألبانيا"{{($movie->country === 'ألبانيا') ? 'Selected' : ''}}>ألبانيا</option>
                    <option value="الجزائر"{{($movie->country === 'الجزائر') ? 'Selected' : ''}}>الجزائر</option>
                    <option value="أندورا"{{($movie->country === 'أندورا') ? 'Selected' : ''}}>أندورا</option>
                    <option value="أنغولا"{{($movie->country === 'أنغولا') ? 'Selected' : ''}}>أنغولا</option>
                    <option value="أنتيغوا وباربودا"{{($movie->country === 'أنتيغوا وباربودا') ? 'Selected' : ''}}>أنتيغوا وباربودا</option>
                    <option value="الأرجنتين"{{($movie->country === 'الأرجنتين') ? 'Selected' : ''}}>الأرجنتين</option>
                    <option value="أرمينيا"{{($movie->country === 'أرمينيا') ? 'Selected' : ''}}>أرمينيا</option>
                    <option value="أستراليا"{{($movie->country === 'أستراليا') ? 'Selected' : ''}}>أستراليا</option>
                    <option value="النمسا"{{($movie->country === 'النمسا') ? 'Selected' : ''}}>النمسا</option>
                    <option value="أذربيجان"{{($movie->country === 'أذربيجان') ? 'Selected' : ''}}>أذربيجان</option>
                    <option value="البهاما"{{($movie->country === 'البهاما') ? 'Selected' : ''}}>البهاما</option>
                    <option value="البحرين"{{($movie->country === 'البحرين') ? 'Selected' : ''}}>البحرين</option>
                    <option value="بنغلاديش"{{($movie->country === 'بنغلاديش') ? 'Selected' : ''}}>بنغلاديش</option>
                    <option value="باربادوس"{{($movie->country === 'باربادوس') ? 'Selected' : ''}}>باربادوس</option>
                    <option value="بيلاروسيا"{{($movie->country === 'بيلاروسيا') ? 'Selected' : ''}}>بيلاروسيا</option>
                    <option value="بلجيكا"{{($movie->country === 'بلجيكا') ? 'Selected' : ''}}>بلجيكا</option>
                    <option value="بليز"{{($movie->country === 'بليز') ? 'Selected' : ''}}>بليز</option>
                    <option value="بنين"{{($movie->country === 'بنين') ? 'Selected' : ''}}>بنين</option>
                    <option value="بوتان"{{($movie->country === 'بوتان') ? 'Selected' : ''}}>بوتان</option>
                    <option value="بوليفيا"{{($movie->country === 'بوليفيا') ? 'Selected' : ''}}>بوليفيا</option>
                    <option value="البوسنة والهرسك"{{($movie->country === 'البوسنة والهرسك') ? 'Selected' : ''}}>البوسنة والهرسك</option>
                    <option value="بوتسوانا"{{($movie->country === 'بوتسوانا') ? 'Selected' : ''}}>بوتسوانا</option>
                    <option value="البرازيل"{{($movie->country === 'البرازيل') ? 'Selected' : ''}}>البرازيل</option>
                    <option value="بروناي"{{($movie->country === 'بروناي') ? 'Selected' : ''}}>بروناي</option>
                    <option value="بلغاريا"{{($movie->country === 'بلغاريا') ? 'Selected' : ''}}>بلغاريا</option>
                    <option value="بوركينا فاسو"{{($movie->country === 'بوركينا فاسو') ? 'Selected' : ''}}>بوركينا فاسو</option>
                    <option value="بوروندي"{{($movie->country === 'بوروندي') ? 'Selected' : ''}}>بوروندي</option>
                    <option value="كمبوديا"{{($movie->country === 'كمبوديا') ? 'Selected' : ''}}>كمبوديا</option>
                    <option value="الكاميرون"{{($movie->country === 'الكاميرون') ? 'Selected' : ''}}>الكاميرون</option>
                    <option value="كندا"{{($movie->country === 'كندا') ? 'Selected' : ''}}>كندا</option>
                    <option value="الرأس الأخضر"{{($movie->country === 'الرأس الأخضر') ? 'Selected' : ''}}>الرأس الأخضر</option>
                    <option value="جمهورية أفريقيا الوسطى"{{($movie->country === 'جمهورية أفريقيا الوسطى') ? 'Selected' : ''}}>جمهورية أفريقيا الوسطى</option>
                    <option value="تشاد"{{($movie->country === 'تشاد') ? 'Selected' : ''}}>تشاد</option>
                    <option value="تشيلي"{{($movie->country === 'تشيلي') ? 'Selected' : ''}}>تشيلي</option>
                    <option value="الصين"{{($movie->country === 'الصين') ? 'Selected' : ''}}>الصين</option>
                    <option value="كولومبيا"{{($movie->country === 'كولومبيا') ? 'Selected' : ''}}>كولومبيا</option>
                    <option value="جزر القمر"{{($movie->country === 'جزر القمر') ? 'Selected' : ''}}>جزر القمر</option>
                    <option value="كوستاريكا"{{($movie->country === 'كوستاريكا') ? 'Selected' : ''}}>كوستاريكا</option>
                    <option value="ساحل العاج"{{($movie->country === 'ساحل العاج') ? 'Selected' : ''}}>ساحل العاج</option>
                    <option value="كرواتيا"{{($movie->country === 'كرواتيا') ? 'Selected' : ''}}>كرواتيا</option>
                    <option value="كوبا"{{($movie->country === 'كوبا') ? 'Selected' : ''}}>كوبا</option>
                    <option value="قبرص"{{($movie->country === 'قبرص') ? 'Selected' : ''}}>قبرص</option>
                    <option value="التشيك"{{($movie->country === 'التشيك') ? 'Selected' : ''}}>التشيك</option>
                    <option value="جمهورية الكونغو الديمقراطية"{{($movie->country === 'جمهورية الكونغو الديمقراطية') ? 'Selected' : ''}}>جمهورية الكونغو الديمقراطية</option>
                    <option value="الدنمارك"{{($movie->country === 'الدنمارك') ? 'Selected' : ''}}>الدنمارك</option>
                    <option value="جيبوتي"{{($movie->country === 'جيبوتي') ? 'Selected' : ''}}>جيبوتي</option>
                    <option value="دومينيكا"{{($movie->country === 'دومينيكا') ? 'Selected' : ''}}>دومينيكا</option>
                    <option value="جمهورية الدومينيكان"{{($movie->country === 'جمهورية الدومينيكان') ? 'Selected' : ''}}>جمهورية الدومينيكان</option>
                    <option value="تيمور الشرقية"{{($movie->country === 'تيمور الشرقية') ? 'Selected' : ''}}>تيمور الشرقية</option>
                    <option value="الإكوادور"{{($movie->country === 'الإكوادور') ? 'Selected' : ''}}>الإكوادور</option>
                    <option value="مصر"{{($movie->country === 'مصر') ? 'Selected' : ''}}>مصر</option>
                    <option value="السلفادور"{{($movie->country === 'السلفادور') ? 'Selected' : ''}}>السلفادور</option>
                    <option value="غينيا الاستوائية"{{($movie->country === 'غينيا الاستوائية') ? 'Selected' : ''}}>غينيا الاستوائية</option>
                    <option value="إريتريا"{{($movie->country === 'إريتريا') ? 'Selected' : ''}}>إريتريا</option>
                    <option value="إستونيا"{{($movie->country === 'إستونيا') ? 'Selected' : ''}}>إستونيا</option>
                    <option value="إثيوبيا"{{($movie->country === 'إثيوبيا') ? 'Selected' : ''}}>إثيوبيا</option>
                    <option value="فيجي"{{($movie->country === 'فيجي') ? 'Selected' : ''}}>فيجي</option>
                    <option value="فنلندا"{{($movie->country === 'فنلندا') ? 'Selected' : ''}}>فنلندا</option>
                    <option value="فرنسا"{{($movie->country === 'فرنسا') ? 'Selected' : ''}}>فرنسا</option>
                    <option value="الغابون"{{($movie->country === 'الغابون') ? 'Selected' : ''}}>الغابون</option>
                    <option value="غامبيا"{{($movie->country === 'غامبيا') ? 'Selected' : ''}}>غامبيا</option>
                    <option value="جورجيا"{{($movie->country === 'جورجيا') ? 'Selected' : ''}}>جورجيا</option>
                    <option value="ألمانيا"{{($movie->country === 'ألمانيا') ? 'Selected' : ''}}>ألمانيا</option>
                    <option value="غانا"{{($movie->country === 'غانا') ? 'Selected' : ''}}>غانا</option>
                    <option value="اليونان"{{($movie->country === 'اليونان') ? 'Selected' : ''}}>اليونان</option>
                    <option value="جرينادا"{{($movie->country === 'جرينادا') ? 'Selected' : ''}}>جرينادا</option>
                    <option value="غواتيمالا"{{($movie->country === 'غواتيمالا') ? 'Selected' : ''}}>غواتيمالا</option>
                    <option value="غينيا"{{($movie->country === 'غينيا') ? 'Selected' : ''}}>غينيا</option>
                    <option value="غينيا بيساو"{{($movie->country === 'غينيا بيساو') ? 'Selected' : ''}}>غينيا بيساو</option>
                    <option value="غويانا"{{($movie->country === 'غويانا') ? 'Selected' : ''}}>غويانا</option>
                    <option value="هايتي"{{($movie->country === 'أفغانستان') ? 'Selected' : ''}}>أفغانستان</option>
                    <option value="هندوراس"{{($movie->country === 'هندوراس') ? 'Selected' : ''}}>هندوراس</option>
                    <option value="المجر"{{($movie->country === 'المجر') ? 'Selected' : ''}}>المجر</option>
                    <option value="آيسلندا"{{($movie->country === 'آيسلندا') ? 'Selected' : ''}}>آيسلندا</option>
                    <option value="الهند"{{($movie->country === 'الهند') ? 'Selected' : ''}}>الهند</option>
                    <option value="إندونيسيا"{{($movie->country === 'إندونيسيا') ? 'Selected' : ''}}>إندونيسيا</option>
                    <option value="إيران"{{($movie->country === 'إيران') ? 'Selected' : ''}}>إيران</option>
                    <option value="العراق"{{($movie->country === 'العراق') ? 'Selected' : ''}}>العراق</option>
                    <option value="جمهورية أيرلندا"{{($movie->country === 'جمهورية أيرلندا') ? 'Selected' : ''}}>جمهورية أيرلندا</option>
                    <option value="فلسطين"{{($movie->country === 'فلسطين') ? 'Selected' : ''}}>فلسطين</option>
                    <option value="إيطاليا"{{($movie->country === 'إيطاليا') ? 'Selected' : ''}}>إيطاليا</option>
                    <option value="جامايكا"{{($movie->country === 'جامايكا') ? 'Selected' : ''}}>جامايكا</option>
                    <option value="اليابان"{{($movie->country === 'اليابان') ? 'Selected' : ''}}>اليابان</option>
                    <option value="الأردن"{{($movie->country === 'الأردن') ? 'Selected' : ''}}>الأردن</option>
                    <option value="كازاخستان"{{($movie->country === 'كازاخستان') ? 'Selected' : ''}}>كازاخستان</option>
                    <option value="كينيا"{{($movie->country === 'كينيا') ? 'Selected' : ''}}>كينيا</option>
                    <option value="كيريباتي"{{($movie->country === 'كيريباتي') ? 'Selected' : ''}}>كيريباتي</option>
                    <option value="الكويت"{{($movie->country === 'الكويت') ? 'Selected' : ''}}>الكويت</option>
                    <option value="قرغيزستان"{{($movie->country === 'قرغيزستان') ? 'Selected' : ''}}>قرغيزستان</option>
                    <option value="لاوس"{{($movie->country === 'لاوس') ? 'Selected' : ''}}>لاوس</option>
                    <option value="لاتفيا"{{($movie->country === 'لاتفيا') ? 'Selected' : ''}}>لاتفيا</option>
                    <option value="لبنان"{{($movie->country === 'لبنان') ? 'Selected' : ''}}>لبنان</option>
                    <option value="ليسوتو"{{($movie->country === 'ليسوتو') ? 'Selected' : ''}}>ليسوتو</option>
                    <option value="ليبيريا"{{($movie->country === 'ليبيريا') ? 'Selected' : ''}}>ليبيريا</option>
                    <option value="ليبيا"{{($movie->country === 'ليبيا') ? 'Selected' : ''}}>ليبيا</option>
                    <option value="ليختنشتاين"{{($movie->country === 'ليختنشتاين') ? 'Selected' : ''}}>ليختنشتاين</option>
                    <option value="ليتوانيا"{{($movie->country === 'ليتوانيا') ? 'Selected' : ''}}>ليتوانيا</option>
                    <option value="لوكسمبورغ"{{($movie->country === 'لوكسمبورغ') ? 'Selected' : ''}}>لوكسمبورغ</option>
                    <option value="مدغشقر"{{($movie->country === 'مدغشقر') ? 'Selected' : ''}}>مدغشقر</option>
                    <option value="مالاوي"{{($movie->country === 'مالاوي') ? 'Selected' : ''}}>مالاوي</option>
                    <option value="ماليزيا"{{($movie->country === 'ماليزيا') ? 'Selected' : ''}}>ماليزيا</option>
                    <option value="جزر المالديف"{{($movie->country === 'جزر المالديف') ? 'Selected' : ''}}>جزر المالديف</option>
                    <option value="مالي"{{($movie->country === 'مالي') ? 'Selected' : ''}}>مالي</option>
                    <option value="مالطا"{{($movie->country === 'مالطا') ? 'Selected' : ''}}>مالطا</option>
                    <option value="جزر مارشال"{{($movie->country === 'جزر مارشال') ? 'Selected' : ''}}>جزر مارشال</option>
                    <option value="موريتانيا"{{($movie->country === 'موريتانيا') ? 'Selected' : ''}}>موريتانيا</option>
                    <option value="موريشيوس"{{($movie->country === 'موريشيوس') ? 'Selected' : ''}}>موريشيوس</option>
                    <option value="المكسيك"{{($movie->country === 'المكسيك') ? 'Selected' : ''}}>المكسيك</option>
                    <option value="مايكرونيزيا"{{($movie->country === 'مايكرونيزيا') ? 'Selected' : ''}}>مايكرونيزيا</option>
                    <option value="مولدوفا"{{($movie->country === 'مولدوفا') ? 'Selected' : ''}}>مولدوفا</option>
                    <option value="موناكو"{{($movie->country === 'موناكو') ? 'Selected' : ''}}>موناكو</option>
                    <option value="منغوليا"{{($movie->country === 'منغوليا') ? 'Selected' : ''}}>منغوليا</option>
                    <option value="الجبل الأسود"{{($movie->country === 'الجبل الأسود') ? 'Selected' : ''}}>الجبل الأسود</option>
                    <option value="المغرب"{{($movie->country === 'المغرب') ? 'Selected' : ''}}>المغرب</option>
                    <option value="موزمبيق"{{($movie->country === 'موزمبيق') ? 'Selected' : ''}}>موزمبيق</option>
                    <option value="بورما"{{($movie->country === 'بورما') ? 'Selected' : ''}}>بورما</option>
                    <option value="ناميبيا"{{($movie->country === 'ناميبيا') ? 'Selected' : ''}}>ناميبيا</option>
                    <option value="ناورو"{{($movie->country === 'ناورو') ? 'Selected' : ''}}>ناورو</option>
                    <option value="نيبال"{{($movie->country === 'نيبال') ? 'Selected' : ''}}>نيبال</option>
                    <option value="هولندا"{{($movie->country === 'هولندا') ? 'Selected' : ''}}>هولندا</option>
                    <option value="نيوزيلندا"{{($movie->country === 'نيوزيلندا') ? 'Selected' : ''}}>نيوزيلندا</option>
                    <option value="نيكاراجوا"{{($movie->country === 'نيكاراجوا') ? 'Selected' : ''}}>نيكاراجوا</option>
                    <option value="النيجر"{{($movie->country === 'النيجر') ? 'Selected' : ''}}>النيجر</option>
                    <option value="نيجيريا"{{($movie->country === 'نيجيريا') ? 'Selected' : ''}}>نيجيريا</option>
                    <option value="كوريا الشمالية"{{($movie->country === 'كوريا الشمالية') ? 'Selected' : ''}}>كوريا الشمالية</option>
                    <option value="النرويج"{{($movie->country === 'النرويج') ? 'Selected' : ''}}>النرويج</option>
                    <option value="سلطنة عمان"{{($movie->country === 'سلطنة عمان') ? 'Selected' : ''}}>سلطنة عمان</option>
                    <option value="باكستان"{{($movie->country === 'باكستان') ? 'Selected' : ''}}>باكستان</option>
                    <option value="بالاو"{{($movie->country === 'بالاو') ? 'Selected' : ''}}>بالاو</option>
                    <option value="بنما"{{($movie->country === 'بنما') ? 'Selected' : ''}}>بنما</option>
                    <option value="بابوا غينيا الجديدة"{{($movie->country === 'بابوا غينيا الجديدة') ? 'Selected' : ''}}>بابوا غينيا الجديدة</option>
                    <option value="باراغواي"{{($movie->country === 'باراغواي') ? 'Selected' : ''}}>باراغواي</option>
                    <option value="بيرو"{{($movie->country === 'بيرو') ? 'Selected' : ''}}>بيرو</option>
                    <option value="الفلبين"{{($movie->country === 'الفلبين') ? 'Selected' : ''}}>الفلبين</option>
                    <option value="بولندا"{{($movie->country === 'بولندا') ? 'Selected' : ''}}>بولندا</option>
                    <option value="البرتغال"{{($movie->country === 'البرتغال') ? 'Selected' : ''}}>البرتغال</option>
                    <option value="قطر"{{($movie->country === 'قطر') ? 'Selected' : ''}}>قطر</option>
                    <option value="جمهورية الكونغو"{{($movie->country === 'جمهورية الكونغو') ? 'Selected' : ''}}>جمهورية الكونغو</option>
                    <option value="جمهورية مقدونيا"{{($movie->country === 'جمهورية مقدونيا') ? 'Selected' : ''}}>جمهورية مقدونيا</option>
                    <option value="رومانيا"{{($movie->country === 'رومانيا') ? 'Selected' : ''}}>رومانيا</option>
                    <option value="روسيا"{{($movie->country === 'روسيا') ? 'Selected' : ''}}>روسيا</option>
                    <option value="رواندا"{{($movie->country === 'رواندا') ? 'Selected' : ''}}>رواندا</option>
                    <option value="سانت كيتس ونيفيس"{{($movie->country === 'سانت كيتس ونيفيس') ? 'Selected' : ''}}>سانت كيتس ونيفيس</option>
                    <option value="سانت لوسيا"{{($movie->country === 'سانت لوسيا') ? 'Selected' : ''}}>سانت لوسيا</option>
                    <option value="سانت فنسينت والجرينادينز"{{($movie->country === 'سانت فنسينت والجرينادينز') ? 'Selected' : ''}}>سانت فنسينت والجرينادينز</option>
                    <option value="ساموا"{{($movie->country === 'ساموا') ? 'Selected' : ''}}>ساموا</option>
                    <option value="سان مارينو"{{($movie->country === 'سان مارينو') ? 'Selected' : ''}}>سان مارينو</option>
                    <option value="ساو تومي وبرينسيب"{{($movie->country === 'ساو تومي وبرينسيب') ? 'Selected' : ''}}>ساو تومي وبرينسيب</option>
                    <option value="السعودية"{{($movie->country === 'السعودية') ? 'Selected' : ''}}>السعودية</option>
                    <option value="السنغال"{{($movie->country === 'السنغال') ? 'Selected' : ''}}>السنغال</option>
                    <option value="صربيا"{{($movie->country === 'صربيا') ? 'Selected' : ''}}>صربيا</option>
                    <option value="سيشيل"{{($movie->country === 'سيشيل') ? 'Selected' : ''}}>سيشيل</option>
                    <option value="سيراليون"{{($movie->country === 'سيراليون') ? 'Selected' : ''}}>سيراليون</option>
                    <option value="سنغافورة"{{($movie->country === 'سنغافورة') ? 'Selected' : ''}}>سنغافورة</option>
                    <option value="سلوفاكيا"{{($movie->country === 'سلوفاكيا') ? 'Selected' : ''}}>سلوفاكيا</option>
                    <option value="سلوفينيا"{{($movie->country === 'سلوفينيا') ? 'Selected' : ''}}>سلوفينيا</option>
                    <option value="جزر سليمان"{{($movie->country === 'جزر سليمان') ? 'Selected' : ''}}>جزر سليمان</option>
                    <option value="الصومال"{{($movie->country === 'الصومال') ? 'Selected' : ''}}>الصومال</option>
                    <option value="جنوب أفريقيا"{{($movie->country === 'جنوب أفريقيا') ? 'Selected' : ''}}>جنوب أفريقيا</option>
                    <option value="كوريا الجنوبية"{{($movie->country === 'كوريا الجنوبية') ? 'Selected' : ''}}>كوريا الجنوبية</option>
                    <option value="جنوب السودان"{{($movie->country === 'جنوب السودان') ? 'Selected' : ''}}>جنوب السودان</option>
                    <option value="إسبانيا"{{($movie->country === 'إسبانيا') ? 'Selected' : ''}}>إسبانيا</option>
                    <option value="سريلانكا"{{($movie->country === 'سريلانكا') ? 'Selected' : ''}}>سريلانكا</option>
                    <option value="السودان"{{($movie->country === 'السودان') ? 'Selected' : ''}}>السودان</option>
                    <option value="سورينام"{{($movie->country === 'سورينام') ? 'Selected' : ''}}>سورينام</option>
                    <option value="سوازيلاند"{{($movie->country === 'سوازيلاند') ? 'Selected' : ''}}>سوازيلاند</option>
                    <option value="السويد"{{($movie->country === 'السويد') ? 'Selected' : ''}}>السويد</option>
                    <option value="سويسرا"{{($movie->country === 'سويسرا') ? 'Selected' : ''}}>سويسرا</option>
                    <option value="سوريا"{{($movie->country === 'سوريا') ? 'Selected' : ''}}>سوريا</option>
                    <option value="طاجيكستان"{{($movie->country === 'طاجيكستان') ? 'Selected' : ''}}>طاجيكستان</option>
                    <option value="تنزانيا"{{($movie->country === 'تنزانيا') ? 'Selected' : ''}}>تنزانيا</option>
                    <option value="تايلاند"{{($movie->country === 'تايلاند') ? 'Selected' : ''}}>تايلاند</option>
                    <option value="توغو"{{($movie->country === 'توغو') ? 'Selected' : ''}}>توغو</option>
                    <option value="تونجا"{{($movie->country === 'تونجا') ? 'Selected' : ''}}>تونجا</option>
                    <option value="ترينيداد وتوباغو"{{($movie->country === 'ترينيداد وتوباغو') ? 'Selected' : ''}}>ترينيداد وتوباغو</option>
                    <option value="تونس"{{($movie->country === 'تونس') ? 'Selected' : ''}}>تونس</option>
                    <option value="تركيا"{{($movie->country === 'تركيا') ? 'Selected' : ''}}>تركيا</option>
                    <option value="تركمانستان"{{($movie->country === 'تركمانستان') ? 'Selected' : ''}}>تركمانستان</option>
                    <option value="توفالو"{{($movie->country === 'توفالو') ? 'Selected' : ''}}>توفالو</option>
                    <option value="أوغندا"{{($movie->country === 'أوغندا') ? 'Selected' : ''}}>أوغندا</option>
                    <option value="أوكرانيا"{{($movie->country === 'أوكرانيا') ? 'Selected' : ''}}>أوكرانيا</option>
                    <option value="الإمارات العربية المتحدة"{{($movie->country === 'الإمارات العربية المتحدة') ? 'Selected' : ''}}>الإمارات العربية المتحدة</option>
                    <option value="المملكة المتحدة"{{($movie->country === 'المملكة المتحدة') ? 'Selected' : ''}}>المملكة المتحدة</option>
                    <option value="الولايات المتحدة"{{($movie->country === 'الولايات المتحدة') ? 'Selected' : ''}}>الولايات المتحدة</option>
                    <option value="أوروغواي"{{($movie->country === 'أوروغواي') ? 'Selected' : ''}}>أوروغواي</option>
                    <option value="أوزبكستان"{{($movie->country === 'أوزبكستان') ? 'Selected' : ''}}>أوزبكستان</option>
                    <option value="فانواتو"{{($movie->country === 'فانواتو') ? 'Selected' : ''}}>فانواتو</option>
                    <option value="فنزويلا"{{($movie->country === 'فنزويلا') ? 'Selected' : ''}}>فنزويلا</option>
                    <option value="فيتنام"{{($movie->country === 'فيتنام') ? 'Selected' : ''}}>فيتنام</option>
                    <option value="اليمن"{{($movie->country === 'اليمن') ? 'Selected' : ''}}>اليمن</option>
                    <option value="زامبيا"{{($movie->country === 'زامبيا') ? 'Selected' : ''}}>زامبيا</option>
                    <option value="زيمبابوي"{{($movie->country === 'زيمبابوي') ? 'Selected' : ''}}>زيمبابوي</option>
                </select>
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" name="duration" value="{{ $movie->duration }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Quality</label>
                </br> </br>
                <input type="radio" name="quality" {{ $movie->quality == '1080P' ? 'checked' : ''}} value="1080P" data-role="radio">1080P
                <input type="radio" name="quality" {{ $movie->quality == '720P' ? 'checked' : ''}} value="720P" data-role="radio">720P
                <input type="radio" name="quality" {{ $movie->quality == '480p' ? 'checked' : ''}} value="480p" data-role="radio">480p
                <input type="radio" name="quality" {{ $movie->quality == '360p' ? 'checked' : ''}} value="360p" data-role="radio">360p
                <input type="radio" name="quality" {{ $movie->quality == '240p' ? 'checked' : ''}} value="240p" data-role="radio">240p
                <input type="radio" name="quality" {{ $movie->quality == '144p' ? 'checked' : ''}} value="144p" data-role="radio">144p
            </div>
            <div class="form-group">
                <label>IMDB</label>
                <input type="number" value="{{ $movie->imdb }}" name="imdb" step="0.01" min="0" class="metro-input">
            </div>

            <div class="form-group">
                <label>Translate</label>
                </br> </br>
                <input type="radio" name="translation" {{ $movie->translation == 'translated' ? 'checked' : ''}} value="translated" data-role="radio" >translated
                <input type="radio" name="translation" {{ $movie->translation == 'not translated' ? 'checked' : ''}} value="not translated" data-role="radio">not translated
            </div>
            <div class="form-group">
                <label>Language</label>
                <select name="language" data-role="select">
                    <option value="الإنجليزية"{{($movie->country === 'الإنجليزية') ? 'Selected' : ''}}>الإنجليزية</option>
                    <option value="العربية"{{($movie->country === 'العربية') ? 'Selected' : ''}}>العربية</option>
                    <option value="الفرنسية"{{($movie->country === 'الفرنسية') ? 'Selected' : ''}}>الفرنسية</option>
                    <option value="الإسبانية"{{($movie->country === 'الإسبانية') ? 'Selected' : ''}}>الإسبانية</option>
                    <option value="الألمانية"{{($movie->country === 'الألمانية') ? 'Selected' : ''}}>الألمانية</option>
                    <option value="الإيطالية"{{($movie->country === 'الإيطالية') ? 'Selected' : ''}}>الإيطالية</option>
                    <option value="الهندية"{{($movie->country === 'الهندية') ? 'Selected' : ''}}>الهندية</option>
                    <option value="الروسية"{{($movie->country === 'الروسية') ? 'Selected' : ''}}>الروسية</option>
                    <option value="البرتغالية"{{($movie->country === 'البرتغالية') ? 'Selected' : ''}}>البرتغالية</option>
                    <option value="التركية"{{($movie->country === 'التركية') ? 'Selected' : ''}}>التركية</option>
                    <option value="النرويجية"{{($movie->country === 'النرويجية') ? 'Selected' : ''}}>النرويجية</option>
                    <option value="الدانماركية"{{($movie->country === 'الدانماركية') ? 'Selected' : ''}}>الدانماركية</option>
                    <option value="اليابانية"{{($movie->country === 'اليابانية') ? 'Selected' : ''}}>اليابانية</option>
                    <option value="الكورية"{{($movie->country === 'الكورية') ? 'Selected' : ''}}>الكورية</option>
                    <option value="الصينية"{{($movie->country === 'الصينية') ? 'Selected' : ''}}>الصينية</option>

                </select>
            </div>

            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube_link" value="{{ $movie->youtube_link }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Movie Link</label>
                <input type="text" name="movie_link" value="{{ $movie->movie_link }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Movie Download Link</label>
                <input type="text" name="download_link" value="{{ $movie->download_link }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Class</label>
                <select name="class" data-role="select">
                    <option value="translated movies">translated movies</option>
                    <option value="American Movies">American Movies</option>
                    <option value="japanese movies">japanese movies</option>
                    <option value="korean movies">korean movies</option>
                </select>
            </div>
            <div class="form-group">
                <label>Producteur </label>
                <input type="text" name="name_producer" value="{{ $movie->name_producer }}" style="width: 250px;">
                <input type="file" name="photo_productor"  data-role="file" style="width: 277px; left: 263px;top: -2.29rem;">
            </div>

            <div class="form-group">
                <label>Actor 1</label>
                <input type="text" name="name_actor1" value="{{ $movie->name_actor1 }}" style="width: 250px;">
                <label>real name Actor 1</label>
                <input type="text" name="real_name_actor1" value="{{ $movie->real_name_actor1 }}"  style="width: 250px;">
                <input type="file" name="photo_actor1"  data-role="file" style="width: 277px;left: 263px;top: -2.29rem;">
            </div>
            <div class="form-group">
                <label>Actor 2</label>
                <input type="text" name="name_actor2" value="{{ $movie->name_actor2 }}" style="width: 250px;">
                <label>real name Actor 2</label>
                <input type="text" name="real_name_actor2" value="{{ $movie->real_name_actor2 }}"  style="width: 250px;">
                <input type="file" name="photo_actor2"  data-role="file" style="width: 277px;left: 263px;top: -2.29rem;">
            </div>
            <div class="form-group">
                <label>Actor 3</label>
                <input type="text" name="name_actor3" value="{{ $movie->name_actor3 }}" style="width: 250px;">
                <label>real name Actor 3</label>
                <input type="text" name="real_name_actor3" value="{{ $movie->real_name_actor3 }}"  style="width: 250px;">
                <input type="file" name="photo_actor3"  data-role="file" style="width: 277px;left: 263px;top: -2.29rem;">
            </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ asset('image1/' .$movie->image_movie) }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="image_movie" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
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
