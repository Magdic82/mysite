**Situace**
Jste zkušený webový vývojář a designér se specializací na moderní AI nástroje pro tvorbu webů. Vaším úkolem je vytvořit profesionální webovou prezentaci pro online kurz zaměřený na tvorbu webových stránek s využitím umělé inteligence.

**Úkol**
Vytvořte kompletní webovou stránku pro kurz "WebdesAIn" se sloganem "Tvorba webových stránek v době AI". Web musí obsahovat všech 7 lekcí kurzu + doplňující minikurz Divi 5 a Wordpress s jejich podtématy, informaci o lektorce Magdaléně Bouškové a reference absolventů. Při tvorbě webu se co nejvíce držte poskytnuté šablony ze složky /templates.

**Cíl**
Vytvořit atraktivní, moderní a funkční webovou stránku, která efektivně prezentuje obsah kurzu, zaujme potenciální studenty napříč různými úrovněmi zkušeností (absolventy prvního kurzu, jiné webáře, samouky, začátečníky i majitele firem) a jasně komunikuje hodnotu kurzu zaměřeného na využití AI nástrojů při tvorbě webů.

**Znalosti**
Struktura kurzu obsahuje 7 hlavních lekcí + doplňující minikurz:

**Hlavní kurz - Tvorba malých webů s AI:**

Lekce 1 - Weby jako podnikání (60 min): Hledání zakázek, Komunikace s klienty

Lekce 2 - Dobrý obsah webu (120 min): Jak vést klienta k dobrým textům, Využití AI deep research

Lekce 3 - Oko pro design (120 min): Pravidla UI, Branding, Canva Pro

Lekce 4 - Instalace nástrojů (30 min): Rozběhnutí Claude Code v Terminálu, Propojení Visual Studia s CC

Lekce 5 - Malý vhled do kódování (90 min): Základy HTML a CSS, Struktura webu v rootu

Lekce 6 - Vibe coding (90 min): Html šablona za pár šlupek, Instrukce pomocí souboru .md

Lekce 7 - Odladění a spuštění (120 min): Úpravy webu, AIO, Spuštění

**Doplňující minikurz - Tvorba středně velkých webů s administrací:**

Minikurz - Divi 5 a Wordpress (180 min): Instalace WP, práce s DIVI 5, pluginy, spuštění

Cílová skupina: Kurz je určen pro absolventy prvního kurzu, jiné webáře, samouky i začátečníky nebo majitele firem. Web by měl oslovit všechny tyto skupiny a komunikovat, že kurz je vhodný pro různé úrovně technických znalostí.

**Příklady**

Příklad 1 - Šablona webu:
"""<šablona z adresáře /template>"""

Příklad 2 - Bio a fotka lektorky:
"""<Replace this text with the BIO A FOTKA MAGDALENY BOUSKOVE or upload a file>"""

**Výstup**
Web by měl obsahovat:
- Hlavní nadpis s názvem kurzu a sloganem
- Sekci s přehledem všech 7 lekcí + minikurz včetně jejich podtémat a času trvání
- Sekci o lektorce Magdaléně Bouškové s jejím bio a fotkou
- Informaci o cílové skupině kurzu (pro koho je kurz určen)
- Sekci s referencemi absolventů (2 reference s fotkami a texty)
- Moderní, čistý design odpovídající tématu AI a webdesignu
- Responzivní layout fungující na všech zařízeních
- Vizuálně atraktivní prezentaci, která odráží inovativní přístup kurzu
- Design a strukturu, která co nejvíce respektuje poskytnutou šablonu ze složky /templates

---

## Použité technologie

**Frontend Framework & Knihovny:**
- HTML5 (semantické značky)
- CSS3 (moderní vlastnosti, flexbox, grid)
- JavaScript (vanilla JS pro interaktivitu)
- Bootstrap 5 (responzivní grid systém a komponenty)

**Pluginy a rozšíření (z template):**
- GLightbox (lightbox pro obrázky a videa)
- ScrollCue (animace při scrollování)
- Swiper (pro případné slidery/carousely)
- Bootstrap Icons, FontAwesome, Themify Icons (ikony)

**Struktura souborů:**
- `/assets/` - styly, obrázky, skripty, pluginy
- `/assets/css/` - vlastní CSS soubory
- `/assets/images/` - obrázky a grafika
- `/assets/plugins/` - externí knihovny
- `index.html` - hlavní stránka

**Responzivní design:**
- Mobile-first přístup
- Breakpointy: mobile (<576px), tablet (576-992px), desktop (>992px)
- Responzivní navigace s mobilním menu

**Responzivita pro mobilní zařízení:**
- **Layout a struktura:**
  - Všechny sloupce se na mobilu (<576px) mění na plnou šířku (1 sloupec)
  - Sekce lekcí zůstává na 80% šířky i na mobilu pro zachování čitelnosti
  - Reference se zobrazují pod sebou (1 sloupec) místo 2 sloupců vedle sebe
  - Paddiny a marginy se automaticky zmenšují pro úsporu místa

- **Typografie na mobilu:**
  - Hlavní nadpis (h1) se zmenšuje pomocí clamp() funkce pro optimální velikost
  - Základní velikost textu 1.125rem zůstává zachována pro čitelnost
  - Časy trvání lekcí (2rem, font Lora) se přizpůsobují menším displejům
  - Subtitle (.subtitle-style) s velikostí 1.25rem funguje na všech zařízeních

- **Navigace na mobilu:**
  - Hamburger menu pro mobilní zařízení
  - Plnohodnotná navigace se skrývá na malých displejích
  - Responzivní toggle pro otevírání/zavírání menu
  - Menu se zobrazuje jako vertikální seznam

- **Obrázky a média:**
  - Všechny obrázky mají max-width: 100% a height: auto
  - Fotky referencí (70px avatary) zachovávají kruhový tvar
  - Fotka lektorky se přizpůsobuje šířce kontejneru
  - Optimalizace velikosti obrázků pro rychlé načítání na mobilních sítích

- **Interaktivní prvky:**
  - CTA tlačítka mají dostatečně velkou klikací oblast (min 44x44px)
  - Dotykové ovládání je optimalizováno pro prsty (touch-friendly)
  - Hover efekty jsou nahrazeny touch událostmi na mobilech

- **Specifické úpravy pro mobil:**
  - Hero sekce se vertikálně centruje s menším paddingem
  - Karty cílové skupiny (4 karty) se zobrazují jako jeden sloupec
  - Tečkované oddělení lekcí zůstává i na mobilu
  - Footer obsah se přeskládá do jednoho sloupce
  - Gradient pozadí zůstává zachován na všech zařízeních

- **Testování:**
  - Testováno na iPhone (Safari)
  - Testováno na Android (Chrome)
  - Testováno pomocí Chrome DevTools (různé rozlišení)
  - Kontrola orientace na šířku i na výšku

**Vlastní CSS styly (custom.css):**
- `.outfit-semibold` - Font Outfit, font-weight 500, velikost 1.3rem
- `.subtitle-style` - Styl pro podnadpisy (1.25rem, font-weight 500)
- Růžová barva (`#ff2f78`) - používá se pro akcentní prvky (logo "AI", tečky v seznamech lekcí)
- Gradient pozadí - jemný pastelový přechod od zelené přes béžovou po růžovou
- Globální zvětšení textu na 1.125rem pro lepší čitelnost
- Tečkované oddělení lekcí místo původních šrafovaných čar
- Časy trvání lekcí - font Lora, velikost 2rem pro čísla
- Sekce lekcí má šířku 80% pro lepší čitelnost
- Spans uvnitř h1 a .outfit-semibold mají stejnou velikost jako parent element

---

## Fáze vývoje

**Fáze 1 - Příprava a analýza**
- Analýza poskytnuté šablony z /template
- Prostudování struktury a stylů šablony
- Příprava obsahu (texty, obrázky lektorky)
- Definování barevné palety a typografie odpovídající AI tematice

**Fáze 2 - Struktura HTML**
- Vytvoření základní HTML struktury v index.html
- Implementace hlavičky (header) s navigací
- Vytvoření hero sekce s názvem kurzu a sloganem
- Přidání sekce "O kurzu" s cílovou skupinou
- Vytvoření sekce s přehledem 7 lekcí + minikurz Divi 5
- Implementace sekce "O lektorce" s bio a fotkou
- Přidání sekce "Features" s výhodami kurzu
- Implementace sekce "Reference" s ohlasy absolventů
- Přidání patičky (footer) s kontaktními informacemi

**Fáze 3 - Stylování CSS**
- Přizpůsobení barevné palety AI tematice (moderní, technologické barvy)
- Stylování hero sekce s důrazem na hlavní nadpis
- Návrh a implementace karet pro jednotlivé lekce
- Stylování sekce o lektorce s profesionálním layoutem
- Responzivní úpravy pro všechna zařízení
- Přidání hover efektů a mikrointerakcí

**Fáze 4 - Interaktivita a animace**
- Implementace smooth scrolling mezi sekcemi
- Přidání scroll animací pomocí ScrollCue
- Funkční mobilní menu
- Případné animace při načítání stránky
- Interaktivní prvky pro lekce (rozbalování podtémat)

**Fáze 5 - Optimalizace a testování**
- Testování na různých zařízeních (desktop, tablet, mobile)
- Testování v různých prohlížečích (Chrome, Firefox, Safari, Edge)
- Optimalizace obrázků pro rychlé načítání
- Kontrola přístupnosti (accessibility)
- SEO optimalizace (meta tagy, struktura nadpisů)
- Validace HTML a CSS kódu

**Fáze 6 - Finální úpravy**
- Review celkového vzhledu a funkčnosti
- Drobné designové úpravy dle potřeby
- Kontrola všech textů a obsahů
- Příprava pro spuštění (hosting, doména)

---

## Struktura webu

**Navigace:**
- Home (úvod)
- O kurzu (cílová skupina)
- Lekce (přehled lekcí)
- O lektorce
- Kontakt

**Sekce stránky:**

1. **Header (Hlavička)**
   - Logo/název "WebdesAIn"
   - Navigační menu
   - CTA tlačítko (např. "Přihlásit se")

2. **Hero sekce**
   - Velký nadpis: "WebdesAIn"
   - Podnadpis/slogan: "Tvorba webových stránek v době AI"
   - Stručný popis kurzu (1-2 věty)
   - Hlavní CTA tlačítko
   - Vizuální prvek (grafika/ilustrace AI tématu)

3. **O kurzu**
   - Krátký úvodní text
   - Cílová skupina (pro koho je kurz určen) - 4 karty:
     * Absolventi mých kurzů
     * Samouci i začátečníci
     * Studenti středních škol
     * Majitelé firem

4. **Lekce kurzu**
   - Přehledné bloky pro každou ze 7 lekcí + minikurz
   - Každá lekce obsahuje:
     * Ikona lekce
     * Název lekce
     * Seznam podtémat (2-3 body s růžovými tečkami)
     * Čas trvání v minutách (vpravo, font Lora)
   - Vizuálně oddělené tečkovanými čarami
   - Šířka 80% pro lepší čitelnost
   - Minikurz Divi 5 a Wordpress je vizuálně oddělen a označen jako doplňující

5. **O lektorce**
   - Fotka Magdalény Bouškové
   - Bio text
   - Profesní zkušenosti (4 body se zaškrtávacími ikonami)

6. **Features (Výhody kurzu)**
   - 3 bloky s ikonami:
     * Moderní AI nástroje
     * Praktické zkušenosti
     * Komplexní přístup

7. **Reference (Testimonials)**
   - 2 reference absolventů
   - Každá reference obsahuje:
     * Fotka absolventa (kruhový avatar 70px)
     * Jméno absolventa
     * Text reference (kurzívou, font Lora)
   - Layout: 2 sloupce na desktopu, 1 sloupec na mobilu

8. **Footer (Patička)**
   - Kontaktní údaje (email: magdalena@strategickyweb.cz)
   - Informace o lektorce
   - Copyright
   - Tmavé pozadí

**Soubory v projektu:**
```
/mysite
├── index.html (hlavní stránka)
├── instrukce.md (tento soubor s instrukcemi)
├── /assets
│   └── /css
│       └── custom.css (vlastní styly)
├── /template
│   └── /assets
│       ├── /css
│       │   └── theme.css (z template)
│       ├── /images
│       │   ├── magdab.jpg (fotka lektorky - hero)
│       │   ├── magdab1.jpg (fotka lektorky - sekce)
│       │   ├── sona.jpg (reference - Markéta Fiala)
│       │   ├── magdak.avif (reference - Magda Kadlecová)
│       │   └── [další obrázky]
│       ├── /js
│       │   └── functions.js (funkce z template)
│       └── /plugins (z template)
│           ├── bootstrap/
│           ├── glightbox/
│           ├── scrollcue/
│           └── [další pluginy]
```

**Reference absolventů:**
1. Markéta Fiala - empatická učitelka, smysl pro humor, pomoc s porozuměním potřebám klienta
2. Magda Kadlecová - skvělý kurz, know-how, dobré vysvětlení postupů, ucelený kurz s fungujícím webem jako výstupem
