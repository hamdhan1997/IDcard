<?php
ignore_user_abort();
error_reporting(0);
$title="KTP Facebook Maker";
include('antiddos.php');
include('header.php');
include('head.php');
echo('</div>');
include 'a.html';
if (isset($_GET['msg'])) {
echo '</div></div><div class="cx"><div align="center"><font color="red">'.$_GET[msg].'</font></center>';
}
echo('</div></div><div class="cx"><div align="left"><form enctype="multipart/form-data" method="post" action="kartu.php"><input type="hidden" name="do" value="submit"><b>Nama Facebook Kamu (max 35):</b><br>
<input type="text" name="username" value="' . htmlspecialchars($username) . '" class="inputlogin" maxlength="35" size="17" style="width:110pt;">
</div></div><div class="cx"><div align="left">
<b>Jenis Kelamin:</b><br>
<select name="sex" size="1"><option value="Laki-Laki"> Laki-Laki </option><option value="Perempuan"> Perempuan </option> <option value="Bencong"> Bencong </option> </select>
</div></div><div class="cx"><div align="left">
<b>Tanggal Lahir:</b><br>
<select name="date"
size="1"><option
value="01"> 01 </option><option value="02"> 02 </option><option value="03"> 03 </option><option value="04"> 04 </option><option value="05"> 05 </option><option value="06"> 06 </option><option value="07"> 07 </option><option value="08"> 08 </option><option value="09"> 09 </option><option value="10"> 10 </option><option value="11"> 11 </option><option value="12"> 12 </option><option value="13"> 13 </option><option value="14"> 14 </option><option value="15"> 15 </option><option value="16"> 16 </option><option value="17"> 17 </option><option value="18"> 18 </option><option value="19"> 19 </option><option value="20"> 20 </option><option value="21"> 21 </option><option value="22"> 22 </option><option value="23"> 23 </option><option value="24"> 24 </option><option value="25"> 25 </option><option value="26"> 26 </option><option value="27"> 27 </option><option value="28"> 28 </option><option value="29"> 29 </option><option value="30"> 30 </option><option value="31"> 31 </option></select>&#160;-&#160;<select name="month"
size="1"><option value="Januari"> Januari </option><option value="Februari"> Februari </option><option value="Maret"> Maret </option><option value="April"> April </option><option value="Mei"> Mei </option><option value="Juni"> Juni </option><option value="Juli"> Juli </option><option value="Agustus"> Agustus </option><option value="September"> September </option><option value="Oktober"> Oktober </option><option value="November"> November </option><option value="Desember"> Desember </option></select>&#160;-&#160;<select name="year"
size="1"><option value="2000"> 2000 </option><option value="1999"> 1999 </option><option value="1998"> 1998 </option><option value="1997"> 1997 </option><option value="1996"> 1996 </option><option value="1995"> 1995 </option><option value="1994"> 1994 </option><option value="1993"> 1993 </option><option value="1992"> 1992 </option><option value="1991"> 1991 </option><option value="1990"> 1990 </option><option value="1989"> 1989 </option><option value="1988"> 1988 </option><option value="1987"> 1987 </option><option value="1986"> 1986 </option><option value="1985"> 1985 </option><option value="1984"> 1984 </option><option value="1983"> 1983 </option><option value="1982"> 1982 </option><option value="1981"> 1981 </option><option value="1980"> 1980 </option><option value="1979"> 1979 </option><option value="1978"> 1978 </option><option value="1977"> 1977 </option><option value="1976"> 1976 </option><option value="1975"> 1975 </option><option value="1974"> 1974 </option><option value="1973"> 1973 </option><option value="1972"> 1972 </option><option value="1971"> 1971 </option><option value="1970"> 1970 </option><option value="1969"> 1969 </option><option value="1968"> 1968 </option><option value="1967"> 1967 </option><option value="1966"> 1966 </option><option value="1965"> 1965 </option><option value="1964"> 1964 </option><option value="1963"> 1963 </option><option value="1962"> 1962 </option><option value="1961"> 1961 </option><option value="1960"> 1960 </option><option value="1959"> 1959 </option><option value="1958"> 1958 </option><option value="1957"> 1957 </option><option value="1956"> 1956 </option><option value="1955"> 1955 </option><option value="1954"> 1954 </option><option value="1953"> 1953 </option><option value="1952"> 1952 </option><option value="1951"> 1951 </option><option value="1950"> 1950 </option><option value="1949"> 1949 </option><option value="1948"> 1948 </option><option value="1947"> 1947 </option><option value="1946"> 1946 </option><option value="1945"> 1945 </option><option value="1944"> 1944 </option><option value="1943"> 1943</option><option value="1942"> 1942 </option><option value="1941"> 1941 </option></select>
</div></div><div class="cx"><div align="left">
<b>Alamat profile (max 35):</b><br>
<input type="text" name="prof" value="' . htmlspecialchars($prof) . '" class="inputlogin" maxlength="35" size="17" style="width:110pt;">
</div></div><div class="cx"><div align="left">
<b>Lokasi Asal (max 30):</b><br>
<input type="text" name="loc" value="' . htmlspecialchars($loc) . '" class="inputlogin" maxlength="30" size="17" style="width:110pt;">
</div></div><div class="cx"><div align="left">
<b>Bergabung Sejak:</b><br>
<select name="dayb"
size="1"><option
value="01"> 01 </option><option value="02"> 02 </option><option value="03"> 03 </option><option value="04"> 04 </option><option value="05"> 05 </option><option value="06"> 06 </option><option value="07"> 07 </option><option value="08"> 08 </option><option value="09"> 09 </option><option value="10"> 10 </option><option value="11"> 11 </option><option value="12"> 12 </option><option value="13"> 13 </option><option value="14"> 14 </option><option value="15"> 15 </option><option value="16"> 16 </option><option value="17"> 17 </option><option value="18"> 18 </option><option value="19"> 19 </option><option value="20"> 20 </option><option value="21"> 21 </option><option value="22"> 22 </option><option value="23"> 23 </option><option value="24"> 24 </option><option value="25"> 25 </option><option value="26"> 26 </option><option value="27"> 27 </option><option value="28"> 28 </option><option value="29"> 29 </option><option value="30"> 30 </option><option value="31"> 31 </option></select>&#160;-&#160;<select name="monthb"
size="1"><option value="01"> 01 </option><option value="02"> 02 </option><option value="03"> 03 </option><option value="04"> 04 </option><option value="05"> 05 </option><option value="06"> 06 </option><option value="07"> 07 </option><option value="08"> 08 </option><option value="09"> 09 </option><option value="10"> 10 </option><option value="11"> 11 </option><option value="12"> 12 </option></select>&#160;-&#160;<select name="yearb"
size="1"><option value="2013"> 2013 </option><option value="2012"> 2012 </option><option value="2011"> 2011 </option><option value="2010"> 2010 </option><option value="2009"> 2009 </option><option value="2008"> 2008 </option><option value="2007"> 2007 </option><option value="2006"> 2006 </option><option value="2005"> 2005 </option><option value="2004"> 2004 </option><option value="2003"> 2003 </option><option value="2002"> 2002 </option><option value="2001"> 2001 </option><option value="2000"> 2000 </option><option value="1999"> 1999 </option><option value="1998"> 1998 </option><option value="1997"> 1997 </option><option value="1996"> 1996 </option><option value="1995"> 1995 </option><option value="1994"> 1994 </option><option value="1993"> 1993 </option><option value="1992"> 1992 </option><option value="1991"> 1991 </option><option value="1990"> 1990 </option></select>
</div></div>
<input type="hidden" name="signature" value="laskarpati" class="inputlogin" maxlength="16" size="17" style="width:110pt;"><div class="cx"><div align="left">
<b>Foto Profil kamu:</b><br>
<input type="file" name="uploaded_file" class="inputlogin" size="10" style="width:110pt;"><br/><font size="2" face="Verdana">Max file size: 256 KB<br/>
Allowed extensions: jpeg, jpg, png</b></div></div><div class="cx"><div align="left">');
echo('<input type="submit" class="button" style="font-weight:bold;" value="Buat"><input type="reset" class="button" style="font-weight:bold;" value="Hapus Data">
</form>');
include 'footer.php';
?>
