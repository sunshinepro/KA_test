
## Užduotis

Užduotį atlikti naudojant PHP, Laravel, MySQL

1. Sukurti nemokamą bandomajį account'ą https://paperform.co/

2. Sukurti formą, kurioje būtų laukai:
- Vardas
- Telefonas
- El paštas
- URL (hidden)
- Pageidaujamos šalys iki 3 galimu (suvest 10)
- Keliautoju skaičius
- Kiti pageidavimai

3. MySQL sukurti lentelę ir /admin panelę, kuri leistų konfiguruoti mūsų svetainėje formow ir webhook embedinimą:

table "paperform"

id
pavadinimas varchar255 - orientacijai
url varchar255 - kokį url per routingus norėsim turėtų puslapyje
paperform_code  varchar255 - formos kodas paperform sistemoje
puslapis varchar255 - čia talpinim identifikacini kodą puslapiui
vardas varchar255 - čia talpinim identifikacini kodą kliento vardui
tel varchar255 - čia talpinim identifikacini kodą telefonui
el_pastas varchar255 - čia talpinim identifikacini kodą el. paštui
uzklausa varchar255 - čia talpinim identifikacinius kodus per kablelį visai likusiai informacijai

4. Pagal sukurtą Paperform formą suvesti formos id ir key duomenų indentifikavimui
Pvz.

id
pavadinimas varchar255 - Pirma Bandomoji forma
url varchar255 - bandomiji-forma
paperform_code  varchar255 - bandomoji-forma145
puslapis varchar255 - {keykodas iš formos}
vardas varchar255 - {keykodas iš formos}
tel varchar255 - {keykodas iš formos}
el_pastas varchar255 - {keykodas iš formos}
uzklausa varchar255 - {keykodas iš formos},{keykodas iš formos},{keykodas iš formos}

5. Sukurti, kad veiktų routingas pagal suvestą formą
atitinkamai pagal pavyzdį:  

url -> jūsų serveris

url/bandomiji-forma -> būtų embedinta forma
url/bandomiji-forma/webhook -> priimtų iš formos postinamus duomenis

Formos embedinimas
-> Paperform -> Pasirinkus Formos Edit -> Share -> Embed -> Inline Embed
Embedinti royutinge

Webhook URL parinkimas
-> Paperform -> Pasirinkus Formos Edit -> After Submition -> Integration & Webhooks -> Webhooks
Suvesti routą

6. Perduoti į formos URL (hidden) key -> pilną puslapio URL kaip numatyta Paperform
https://paperform.co/help/articles/pre-filling-forms

7. Sukurti uzklausų lentelę

table "uzklausos"

id
created_at datetime
puslapis text
vardas varchar255
tel varchar255
el_pastas varchar255
uzklausa text

8. Paruošti webhook, kuris priimtų PaperForm suvestus duomenis
pagal table "paperform" numatytą konfiguraciją ir suvestų
į table "uzklausos"
Webhook adresas:
url/bandomiji-forma/webhook

Po Paperform formos užpildymo nukreipti į puslapį,
kuriame išvedami duomenys iš lentelės "uzklausos"
Nukreipimas -> PaPerform ->edit form -> After submission -> Success Page and redirect

Taip, kad jau atsivaizduotų suvesti duomenys.

Perduodant Duomenis iš PaperForm "uzklausa" lakelyje perduoti tiek "title" tiek "value",
kituose laukeliuose tik "value"

Žr.: https://paperform.co/help/articles/how-to-use-webhooks


9. Patalpinti viską GitHUB

10. Pakurti išorinį serverį į kurį sukelti veikiantį kodą ir ištestuoti

11. Atsiųsti:
- nuorodą į GitHUB
- nuorodą į veikiančią integurotą formą išoriniame serveryje
- nuorodą, kur galiu įvesti konfiguraciją naujai formai
- prieigą prie peperform.co bandomojo account (usernam ir password)


## Paperform forma


https://jws3zbpo.paperform.co
