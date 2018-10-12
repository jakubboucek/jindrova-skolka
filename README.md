# Jindrova školka - Lekce 4
**Téma: PHP - Ošetření vstupu**

## Zadání
V souboru `index.php` je formulář. Po jeho odeslání se nyní nic nestane. Tvým
úkolem je přidat PHP kód, který odeslání formuláře zpracuje a odeslané hodnoty
vypíše do připravené tabulky `Odeslaná data`.

Nově bude při odelání prováděna kontrola dat. Uživatel musí pro úspěšné odeslání
formuláře vyplnit povinná pole a to: `Jméno`, `Uživatelské jméno` a `Heslo`. 

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