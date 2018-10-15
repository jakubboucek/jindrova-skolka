# Jindrova školka - Lekce 5
**Téma: PHP - Ošetření vstupu II.**

## Zadání
V souboru `index.php` je formulář. Po jeho odeslání se nyní nic nestane. Tvým
úkolem je přidat PHP kód, který odeslání formuláře zpracuje a odeslané hodnoty
vypíše do připravené tabulky `Odeslaná data`.

Při odelání bude prováděna kontrola dat. Uživatel musí pro úspěšné odeslání
formuláře vyplnit povinná pole a to: `Jméno`, `Uživatelské jméno` a `Heslo`. 

Nově bude probíhat validace formuláře takto:
- platí všechny podmínky z minulého úkolu,
- Uživatelské jméno se může skládat pouze z písmen `a`-`z` (i velké) a teček `.`,
- Heslo musí mít nejméně 6 znaků,
- Telefon se může skládat pouze z čísel s tím, že jich musí být přesně 9, ale mohou
být libovolně rozdělené mezerami,
- E-mail musí mít formát e-mailové adresy. 

Nepovinná pole mohou zůstat prázdná – v takovém případě se neprovádí validace (tedy
když uživatel nevyplní e-mail, nesmí to křičet, že to není platný formát).

V případě, že uživatel nesplní požadavek, zobrazí se v přípraveném červeném poli
chyba.

### Další podmínky
- Pokud odeslaný formulář nesplňuje podmínky, nesmí se tabulka `Odeslaná data`
vypnit ani zčásti (vše se musí chovat, jako by nic odesláno nebylo),
- Pokud odeslaný formulář nesplňuje podmínky, formulář musí uživateli znovu vyplnit
data do formuláře, aby to nemusel celé vyplňovat znovu.
- Bezpečí uživatele ani systému nesmí být nikdy ohroženo.
 
Je to poměrně komplexní úkol (i když to možná nevypadá) – doporučuju úkol plnit a
commitovat postupně, snadněji se v případě chybného rozhodnutí vrátíš o kousek zpět.

Máš vonou ruku v tom, jak si kód zorganizuješ na více souborů, funkcí, ap. v zájmu
přehlednosti a udržitelnosti. 