# Τεχνικό Εγχειρίδιο

## ΕΓΚΑΤΑΣΤΑΣΗ MOODLE

> apache2 <br>
> Server version: Apache/2.4.58 (Debian)

> mariadb <br>
> Server version: 10.11.6-MariaDB-2 Debian n/a

```bash
mkdir /var/www/moodledata
```

```bash
sudo chmod 777 /var/www/moodledata
```

```bash
sudo systemctl start apache2
```

```bash
sudo systemctl start mariadb
```

[https://127.0.0.1/moodle](https://127.0.0.1/moodle)


## [moodledata/filedir](./moodledata/filedir) (Αρχεία)

Το Moodle αποθηκεύει τα αρχεία που ανεβάζετε σε έναν φάκελο που ονομάζεται "filedir" μέσα στη δομή του συστήματος αρχείων του Moodle.

Ο φάκελος "filedir" μέσα συνήθως περιέχει πολλούς υποφακέλους. Αυτοί οι υποφάκελοι δημιουργούνται αυτόματα από το Moodle και έχουν ονόματα που αντιστοιχούν στα ID των αρχείων που ανεβάζετε.

πχ [/moodledata/filedir/e4/99/e49978075acee939dafed1b1d6e32279a5ac4b51](/moodledata/filedir/e4/99/e49978075acee939dafed1b1d6e32279a5ac4b51) είναι το `ΒΑΣΙΚΕΣ ΕΝΝΟΙΕΣ ΑΡΧΙΤΕΚΤΟΝΙΚΗΣ ΚΑΙ ΔΙΑΣΥΝΔΕΣΗΣ ΔΙΚΤΥΩΝ.pdf`
