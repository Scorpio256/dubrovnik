<!DOCTYPE
 html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="generator" content="PSPad editor, www.pspad.com" />
  <meta name="keywords" content="Dubrovník, Fotogalerie, Chorvatsko, Historie, Památky" />
  <meta name="description" content="Dubrovník - Chorvatsko" />  
  <meta name="verify-v1" content="iW3++x/SGw9o2it6vSKyRW/LH7QsU4CM2/t1MsRnY0M=" />
  <link rel="stylesheet" href="web_design.css" type="text/css" />
  <link rel="stylesheet" href="text_format.css" type="text/css" />
  
    <script type="text/javascript" src="js/lightbox/prototype.js"></script>
    <script type="text/javascript" src="js/lightbox/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="js/lightbox/lightbox.js"></script>
	  <link rel="stylesheet" href="js/lightbox/css/lightbox.css" type="text/css" media="screen" />
  
  <script src="galerie.js" type="text/javascript"></script>
  <title>Dubrovník
  <?php $strana=$_GET['strana']; ?>
      <?php 
          if($strana=='historie')echo " - Historie";
          elseif($strana=='galerie')echo " - Fotogalerie";
          elseif($strana=='hotely')echo " - Hotely";
          elseif($strana=='pamatky')echo " - Památky";
          elseif($strana=='neni')echo " - Požadovaná stránka nenalezena";
          else echo "";
       ?></title>
  </head>
  <body>
  <div class="hlavni">
  <?php if($strana==""){echo "
<script type='text/javascript'>
alert(\"Tyto stránky byly tvořeny pouze jako školní projekt. K obrázkům a textům použitých na těchto stránkách si nepřivlastňujeme žádná práva!\");
</script>";
}
?>
<table cellpadding="0" cellspacing="0">
<tr><td class="main_pic" colspan="3">
<table class="menu"><tr><td>
<span id="main_menu">
<a href="?strana=?">Home</a>&nbsp;•&nbsp;
<a href="?strana=historie">Historie</a>&nbsp;•&nbsp;
<a href="?strana=galerie&amp;start=0&amp;pocet=12&amp;x=1&amp;str=10.1">Fotografie</a>&nbsp;•&nbsp;
<a href="?strana=hotely">Hotely</a>&nbsp;•&nbsp;
<a href="?strana=pamatky">Památky</a>&nbsp;&nbsp;
</span></td></tr></table>
<br /></td></tr>
<tr><td class="left_border">&nbsp;</td><td class="main_page">
<!-- Hlavní část stránky -->
<?php

/*............................HISTORIE.....................................*/
if($strana=='historie')
{
echo "
<h1>Dubrovník - Historie</h1>
<img id='DSC05343_jpg' alt='Věž Minčeta' src='images/DSC05343.jpg' />
<p>Podle dosavadních historických předpokladů založili Dubrovník začátkem 7. stol. uprchlíci z nedalekého Epidauru (dnešní Cavtat), a to na pustém skalnatém ostrůvku Lause, odděleném od pevniny úzkým průlivem (v místech dnešní hlavní dubrovnické,třídy Placa - Stradun). Nová osada dostala název Ragusium (od řeckého slova lause = útes), později upraveném na Ragusa. Podle výsledků archeologických průzkumů po zemětřesení v r. 1979 stála však již v době příchodu běženců na ostrůvku velká byzantská bazilika (na místě dnešní katedrály), takže se dá předpokládat, že kolem byla i nemalá osada.</p>
<p>Na pevninské straně průlivu vznikala v průběhu staletí slovanská osada Dubrava. Ve 12. stol. se obě osady spojily v jednu, průliv mezi nimi byl zasypán. Proces poslovanštění obyvatelstva byl pak v podstatě dokončen ve 14. stol.</p>
<p>Obratnou diplomatickou politikou, odváděním poplatků a jinými závazky si Dubrovník po staletí zajišťoval klidný vývoj a vnitřní nezávislost na mocnějších sousedech.</p>
<p>Nejprve formálně uznával nadvládu byzantské říše, s oslabením její moci se stala nositelem svrchovanosti Benátská republika (r. 1205). Dubrovník přitom vyvíjel všemožné úsilí, aby se nadvlády nebezpečné soupeřky zbavil, i když i v době benátské suverenity uskutečňoval podle možnosti samostatnou politiku.</p>
<p>K vymanění z moci Benátek využil sílící moci a významu chorvatských panovníků, o jejichž ochranu požádal. Po odchodu benátského knížete-místodržitele z Dubrovníka r. 1358 převzala moc ve státě Velká rada.</p>
<p>Nejprve se na správě obce podíleli všichni občané, v 15. stol. ale získali rozhodující moc šlechtici. Dubrovník se tak stal patricijskou republikou, prostí občané neměli na vládě účast. Správní systém byl demokratičtější obdobou Benátské republiky. Zákonodárnou moc měla Velká rada, výkonnou Malá rada a kníže (knez). Senát složený z patriciů (měl 25 členů) rozhodoval o věcech vnitřní i zahraniční politiky.</p>
<img id='DSC05320_jpg' alt='Pevnost Lovrijenac' src='images/DSC05320.jpg' />
<p>Republika přísně dbala na to, aby se nevytvořily podmínky pro soustředění moci do rukou jednotlivce, což by vedlo k ohrožení principu státního zřízení. Proto byl například kníže volen jen na dobu jednoho měsíce, po který musel bydlet odděleně od své rodiny v Knížecím paláci, aby se plně soustředil na své povinnosti a nemohl být vnějšími vlivy vyrušován nebo ovlivňován.</p>
<p>Tehdejší Ragusa byla jedním z nejpokrokovějších států v Evropě na poli zdravotní a sociální péče: první sociálně hygienické zákony byly vydány již ve 13. stol., byla tu karanténní služba, od 14. stol. byla zavedena bezplatná zdravotní péče o obyvatelstvo, v témže a dalším století založeny starobinec, nemocnice, lazaret, leprosérie, lékárna, nalezinec. Město mělo na svou dobu velmi moderní vodovodní i kanalizační systém. Byl zajištěn i odvoz odpadků. Od poloviny 14. stol. tu fungovala pojišťovna lodí a jejich nákladů.</p>
<p>Od 15. stol. Dubrovník uznával kromě uherské i tureckou svrchovanost. Za poskytování 'ochrany' odváděl Turkům, tak jako dříve jiným 'ochráncům', tučný poplatek, tzv. harač (pohyboval se mezi 12 tis. až 19 tis. zlatých dukátů, co byla ve své době obrovská částka). Od Turků však za něj získal nejen klid pro další rozvoj, nýbrž i nesmírně výhodné a výnosné výhradní právo svobodného obchodu po celé turecké říši. Otevíral zde své konzuláty, jeho kupci a karavany se mohli volně pohybovat od západní Evropy po východ osmanské říše. Dubrovník měl fakticky monopol na dovoz a vývoz zboží a stal se prostředníkem obchodu mezi Evropou, tureckým Balkánem a Malou Asií.</p>
<p>Dubrovník byl v té době silnou obchodní a námořní mocností. Se svými 300 velkých obchodních a válečných lodí a 4 000 námořníků měl tehdy třetí největší loďstvo na světě. Kromě obchodu byla značným přínosem pro jeho bohatství také těžba soli (u Stonu).</p>
<p>Vrcholu prosperity dosáhl v 15. a 16. stol., kdy úspěšně soupeřil s Benátskou republikou. Kamennými svědky bohatství, prosperity a kulturní úrovně této miniaturní republiky jsou dodnes stavitelské památky.</p>
<p>Blahobyt a poměrný mír vytvořily živnou půdu pro rozvoj věd a umění. Dubrovník byl v 15. až 18. stol. významným kulturním střediskem, přdevším literárním, jakož i střediskem vědy.</p>
<img id='DSC05356_jpg' alt='Kostel sv. Salvátora' src='images/DSC05356.jpg' />
<p>Pokud jde o vlastní území Dubrovnické republiky, patřila jí od 14. stol. většina Jihodalmatských ostrovů, pobřežní městečka a obce až ke Stonu na severu, celý poloostrov Pelješac, k jihu pak všechny obce až po Konavle. Jižněji ležící údolí Sutoriny a severní Klek s Neumem postoupil Dubrovník mírem v Požarevci Turecku, aby neměl společnou hranici s rozpínavou a nebezpečnou Benátskou republikou.</p>
<p>První tragický úder znamenala pro republiku velká morová epidemie v r. 1526, během níž za oběť 'černé smrti' padlo přes 30 tisíc obyvatel republiky.</p>
<p>Rozšíření známého světa o Ameriku, objevení námořní cesty do Indie a další objevy proměnily Středozemní moře v příliš malé a uzavřené moře. Těžiště velké námořní plavby se přesunulo ze Středomoří k Atlantiku. Přesun evropského obchodu a mořeplavby mimo Středozemní moře zasadil těžký úder jak Dubrovníku, tak i jeho soupeřce, Benátské republice.</p>
<p>Konec významu Dubrovníku však znamenalo katastrofální zemětřesení v r. 1667, při němž zahynula naprostá většina obyvatelstva: ze 40 tisíc zůstalo v městě naživu jen 600 lidí! Zároveň byla zničena převážná část města i loďstva. Dubrovník ztratil své postavení obchodní velmoci. Z následků zemětřesení se republika již nikdy nevzpamatovala, i když její obyvatelé opět dosáhli určitého blahobytu.</p>
<p>Formální zánik přineslo Dubrovnické republice Napoleonovo tažení začátkem 19. stol. Jako součást Ilyrských provincií sdílel Dubrovník od r. 1806 osudy Jižní Dalmácie. Od r. 1813 až do první světové války patřil Rakousku.</p>
<p>Po první světové válce připadl Království Srbů, Chorvatů a Slovinců (SHS), od konce druhé světové války se stal součástí chorvatské svazové republiky v rámci Jugoslávie.</p>
";
}
/*.............................Galerie.....................................*/
elseif($strana=='galerie')
{
echo"
<div class='galerie'>

<object>
<form enctype='multipart/form-data' action='index.php?strana=galerie' method='post'>
<div class='galerie_zobrazeni'>
Zobrazených obrázků:

<select name='pocet'>";
$o='selected="selected"';
if($pocet==12)echo "<option value='12' $o>12</option>";
else echo "<option value='12'>12</option>";
if($pocet==20)echo "<option value='20' $o>20</option>";
else echo "<option value='20'>20</option>";
if($pocet==40)echo "<option value='40' $o>40</option>";
else echo "<option value='40'>40</option>";
if($pocet==60)echo "<option value='60' $o>60</option>";
else echo "<option value='60'>60</option>";
if($pocet==80)echo "<option value='80' $o>80</option>";
else echo "<option value='80'>80</option>";
if($pocet=='')echo "<option value='' $o>vše</option>";
else echo "<option value=''>vše</option>";
echo "</select><input type='submit' value='Zobraz' /></div></form></object>";


$max=101;
$cesta='images/galerie/dubrovnik';
$jmeno='Dubrovnik ';
if($_POST['pocet']<>''||$x==1){
if($x<>1)$start=0;
$strana=($start + $pocet) / $pocet;
echo "<div class='galerie_strany'>Strana: " . $strana . "</div><div class='galerie_strany1'>";
$str=($max/$pocet);
for($i=0;$i<$str;$i++){
echo "<a href='?strana=galerie&amp;start=" . ($pocet * $i) . "&amp;pocet=$pocet&amp;x=1&amp;str=$str'>" . ($i + 1) . " </a>";
}
echo "</div>";
}
else{
$pocet=$max;
$start=0;
}
echo "<br /><table class='galerie_tabulka'>";
$pocet1=$start+$pocet;
for($i=$start;$i<$pocet1;$i){
  echo "<tr>";
    for($y=0;$y<4;$y++,$i++){
    if($i<$pocet1&&$i<$max){
      echo "<td><a class='galerie_obrazky' rel='lightbox-roadtrip' href='" . $cesta . $i . ".jpg'><img class='galerie_img' alt='" . $jmeno . $i . " (klikni pro zvetšení)' src='" . $cesta . $i . "r.jpg' /></a></td>";
      }
    }
echo "</tr>";
}
echo "</table></div>";

}
/*.............................Hotely......................................*/
elseif($strana=='hotely')
{
echo "
<span class='hotely'>

<p>
<img id='h_jpg' alt='Hotel Kompas' src='images/hotely/h_kompas.jpg' />
<h1>Hotel KOMPAS</h1>
<table class='hotely'>
			<tr><td>Poloha:</td>
				<td>na poloostrově Lapad, přímo u
moře, Dubrovník 3 km, (pravidelná autobusová
linka).</td></tr>
			
				<tr><td>Pláž:</td>
				<td>(Sumartin) kamenitá a oblázková,
cca. 50 m.</td></tr>
			
				<tr><td>Stravování:</td>
				<td>(v klimatizované restauraci)
snídaně a večeře - švédské stoly.</td></tr>
			
				<tr><td>Sport:</td>
				<td>tenisové centrum v blízkosti, vodní
sporty.</td></tr>
			
				<tr><td>Další nabídka:</td>
				<td>jacuzzi (v ceně), restaurace,
kavárna, taverna, bistro, vnitřní
bazén s mořskou vodou a poolbarem
(červenec, srpen - uzavřen), terasa na slunění,
fitnes, sauna, prodejna suvenýrů, terasa
s hudbou k tanci, garáž (zdarma).</td></tr>

			
				<tr><td>Ubytování:</td>
				<td>klimatizovaný pokoj - (TV/
sat, telefon, minibar), sprcha/WC, vysoušeč
vlasů.</td></tr>
			
        </table>
</p>

<br />

<p>
<img id='h_jpg' alt='Vila Rasiča' src='images/hotely/h_rasica.jpg' />
<h1>Vila RAŠICA</h1>
 <table class='hotely'>
			
				<tr><td>Poloha:</td>
				<td>na kopci Petka, na poloostrově
Lapad, v borovém lese, cca. 3 km od Dubrovníku
(pravidelná autobusová linka).</td></tr>
			
				<tr><td>Pláž:</td>
				<td>oblázková, cca. 300 m.</td></tr>
			
				<tr><td>Stravování:</td>
				<td>snídaně - švédské stoly, večeře
– servírovaná.</td></tr>
			
				<tr><td>Sport:</td>
				<td>tenisové centrum v blízkosti, vodní
sporty.</td></tr>
			
				<tr><td>Další nabídka:</td>
				<td>restaurace s terasou
a taneční hudbou, kavárna, sejf, Tv
místnost, směnárna, parkoviště.</td></tr>
	
				<tr><td>Ubytování:</td>
				<td>(v bungalovech) klimatizovaný
pokoj - sprcha/WC.</td></tr>
			
        </table>
</p>

<br />
<br />

<p>
<img id='h_jpg' alt='Hotel Župa' src='images/hotely/h_zupa.jpg' />
<h1>Hotel ŽUPA</h1>
        <table class='hotely'>
			
				<tr><td>Poloha:</td>
				<td>v překrásném a malebném městě
Srebreno, cca. 10 km od Dubrovniku.</td></tr>
			
				<tr><td>Pláž:</td>
				<td>oblázková, cca. 150 m.</td></tr>
			
				<tr><td>Stravování:</td>
				<td>snídaně - švédské stoly, večeře
- servírovaná.</td></tr>
			
				<tr><td>Sport:</td>
				<td>víceúčelové hřiště, vodní sporty.</td></tr>
			
				<tr><td>Další nabídka:</td>
				<td>restaurace, kavárna,
TV místnost, diskotéka v blízkosti.</td></tr>
		
				<tr><td>Ubytování:</td>
				<td>(v pavilonech) pokoj - (telefon),
sprcha/WC, balkon.</td></tr>
			
        </table></p>
</span>
<p>&nbsp;</p>";
}
/*..............................Památky.......................................*/
elseif($strana=='pamatky')
{
echo "
<table class='pamatky'><tr><td>
<img id='t_hrad_jpg' alt='Hradby' src='images/pamatky/t_hradby.jpg' />
<br />
<h1>Hradby</h1>
<p>Dubrovnické hradby spojují minulost a současnost. Jsou jedním z nejlepších obranných systému v Evropě. Jsou místem, které určitě musítě navštívit.Jejich celková délka je 1940 metrů a mají pět obranných bašt. Projděte se po hradbách, které rámcují Staré město, užijte si výhledu na dubrovnické střechy, moře a nedaleý ostrůvek Lokrum. Brzy se budete cítit jakoby jste se vrátili do minulosti. Na baštách se i dnes konají kulturní akce a koncerty. Na jedné z nich, Minčetě, se pořádají svatby.</p>
</td></tr>
<tr><td>
<img id='t_spon_jpg' alt='Palác Sponza' src='images/pamatky/t_sponza.jpg' />
<br />
<h1>Palác Sponza</h1>
<p>V paláci Sponza je Státní archív, v němž jsou uchovány i dokumenty ze 12.století. Z nich se dozvíte, jak Dubrovničané rozvíjeli své politické, obchodní hospodářské styky s jinými evropskými zeměmi, protože Dubrovník byl svého času samostatnou republikou. </p>
</td></tr>
<tr><td>
<img id='t_lovr_jpg' alt='Lovrijenac' src='images/pamatky/t_lovrijenac.jpg' />
<br />
<h1>Lovrijenac</h1>
<p>Monumentální a impresivní pevnost vně městských hradeb, z níž střežily hlídky hlavní vstup do města, svědčí o svém vzniku i o hrdinských činech svých strážců a obránců. Dnes je Lovrijenac malebný zvlášť v době konání Dubrovnických letních her a představení 'Hamleta' je jedním z tradičních pořadů, které se na něm konají každou sezónu.</p>
</td></tr>
<tr><td>
<img id='t_orla_jpg' alt='Rolandův sloup' src='images/pamatky/t_orlando.jpg' />
<br />
<h1>Orlandův sloup</h1>
<p>Rolandův sloup nebo též Orlandův sloup (Orlandov stup) stojí na náměstí Luža před kostelem sv. Blažeje (Sv. Vlaho) na východním konci nejfrekventovanější tepny Dubrovníka, Stradunu a jeho úloha byla od počátku mnohoznačná.</p>
<p>Podle tradice byl Roland, jedním z nejznamenitějších rytířů císaře Karla Velikého (měl být i jeho synovcem). Zahynul zradou v roce 778 v průsmyku Rancevaux na hranicích španělsko-francouzských, když se v čele zadního voje Karlova vojska vracel ze Španělska do Francie. Zmytizovaný námět beznadějného boje zrazeného statečného hrdiny se stal námětem četných literárních děl; v české literatuře se Rolandovým příběhem inspiroval Julius Zeyer ve své Karolínské epopeji.</p>
<p>Podle jedné verze měl být právě jako výraz vděčnosti postaven v roce 1418 Rolandův sloup, ale podle jiné verze mělo jeho postavení v Dubrovníku jiný smysl. Ve druhé polovině středověku se totiž stavěly v mnoho evropských zejména obchodních městech sloupy s Rolandovou sochou, které se staly symbolem svobodných měst a jejich volného obchodu. A do třetice se v Dubrovníku zvažuje i třetí verze, a to podíl německého císaře (a českého i uherského krále) Zikmunda Lucemburského na vybudování dubrovnického Rolanda. Zikmund vystavěl Rolandovy sloupy v několika severních městech své rozsáhlé říse. A Dubrovník po určitou dobu uznával Zikmundovu svrchovanost a záštitu. Byl přece jen panovníkem uherského, a tedy i chorvatského státu. A z archivu se ví, že Zikmund alespoň jednou Dubrovník navštívil.</p>
<p>Přibližně v té době se v jižní části Evropy začalo používat převážně jméno Orlando místo Roland.</p>
</td></tr></table>";
}


/*..............................404........................................*/


elseif($strana=='neni')
{
echo "Omlouváme se, ale vámi požadovaná stránka se nenachází na serveru <a href=''>dubrovnik.dug-in.com</a>";

}

/*..............................INDEX......................................*/
else echo"
<h1>Dubrovník</h1>
<img id='dubr_jpg' alt='Dubrovník' src='images/dubr.jpg' />
<p>Město (50 tis. obyv.), významný osobní přístav a jedno z nejnavštěvovanějších turistických míst na chorvatském Jadranu. Patří mezi nejcennější památkové komplexy v jihovýchodní Evropě; proto byl Dubrovník již v r. 1979 zařazen do celosvětového seznamu kulturního dědictví organizace UNESCO. Pro své velmi příznivé klima a chráněnou polohu je Dubrovník s oblibou navštěvován jako letní i zimní přímořské lázně. Pro zdejší podnebí jsou příznačná teplá dlouhá suchá léta a mírné zimy. Vysoký je počet hodin slunečního svitu - 2 554 hodin ročně. Vyniká též zvlášť bohatou vegetací svých parků, zahrad a veřejných prostranství; květena je středomořská i subtropická.</p>
<p>Dubrovník je i centrem sportů, zejména vodních, především na poloostrově Lapadu západně od starého města, kde je velká hotelová a rekreační oblast. Nejexkluzivnější hotely jsou v jižní části, na předměstí Ploče.</p>
<p>Dále je Dubrovník i významným kulturním a osvětovým střediskem. Ve městě je stálé divadlo, symfonický orchestr, komorní hudební tělesa, v rámci Letních dubrovnických her (<em>Dubrovačke ljetne igre</em>) přijíždějí do Dubrovníka přední divadelní soubory, hudební tělesa a sólisté - z Chorvatska i z celé Evropy. Jsou tu významná muzea a galerie. V Dubrovníku je několik univerzitních fakult, vyšší školy, odborné školy, pracují tu různé vědecké ústavy.</p>
<p>Kromě malého městského přístavu v rámci městského jádra je hlavní přístav na předměstí Gruž (trajektové linky a lodní linky, i do Itálie a do Řecka). Je tu jachtařská marina Dubrovník a další marina je u obce Komolac na Rijece Dubrovačce.</p>
";


?>
<!-- Hlavní část stránky - konec -->
</td><td class="right_border">&nbsp;</td></tr>
<tr><td colspan="3" class="lines">&nbsp;</td></tr>
<tr><td colspan="3" class="lista">
<table cellpadding="0" cellspacing="0">
<tr><td class="banner">&nbsp;
<a href="http://validator.w3.org/check?uri=referer"><img src="images/xhtml.gif" title="Valid XHTML 1.1" alt="Valid XHTML 1.1" style="border:0;width:80px;height:17px;" /></a>&nbsp;&nbsp;
<a href="http://jigsaw.w3.org/css-validator/"><img style="border:0;width:80px;height:17px;" src="images/css.gif" alt="Valid CSS!" /></a></td>
<td class="copyright"><span class="copyright_text">&copy; <a href="http://www.dug-in.com">dug-in.com</a> 2007</span></td>
<td class="right_banner"><a href="http://www.netagent.cz"><img src="http://www.netagent.cz/agent.php?id=1982&amp;box=2&amp;color=green" alt="NetAgent" style="border:0;width:83px;height:17px;top:2px;" /></a>&nbsp;&nbsp;
<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" style="border:0;width:83px;height:17px;top:2px;" /></a>&nbsp;&nbsp;</td></tr></table></td></tr>
</table>
</div>
 </body>
</html>
