<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'task'     => [
                    'en-US' => 'Look at your finances and find one way to save money',
                    'de'    => 'Schau dir deine Finanzen an und finde einen Weg, Geld zu sparen',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go for a walk',
                    'de'    => 'Spazieren gehen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize a cluttered drawer',
                    'de'    => 'Ordne eine überfüllte Schublade',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to an escape room',
                    'de'    => 'Geh in einen Escape Room',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a list of things you are grateful for',
                    'de'    => 'Schreibe eine Liste mit Dingen, für die du dankbar bist',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Study a foreign language',
                    'de'    => 'Eine Fremdsprache lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Pick up litter around your favorite park',
                    'de'    => 'Sammle Müll in deinem Lieblingspark auf',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make homemade ice cream',
                    'de'    => 'Mach selbstgemachtes Eis',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Watch a movie you\'d never usually watch',
                    'de'    => 'Sieh dir einen Film an, den du sonst nie sehen würdest',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Prepare a dish from a foreign culture',
                    'de'    => 'Bereite ein Gericht aus einer fremden Kultur zu',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Cook something together with someone',
                    'de'    => 'Gemeinsam mit jemandem etwas kochen',
                ],
                'category' => 'cook',
                'person'   => 2,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Mow your neighbor\'s lawn',
                    'de'    => 'Mähe den Rasen deines Nachbarn',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go on a fishing trip with some friends',
                    'de'    => 'Mach einen Angelausflug mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 3,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Repaint a room in your house',
                    'de'    => 'Einen Raum in deinem Haus neu streichen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go swimming with a friend',
                    'de'    => 'Mit einem Freund schwimmen gehen',
                ],
                'category' => 'social',
                'person'   => 2,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a paper airplane contest with some friends',
                    'de'    => 'Veranstalte einen Papierflieger-Wettbewerb mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Volunteer and help out at a senior center',
                    'de'    => 'Arbeite ehrenamtlich in einem Seniorenzentrum mit.',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Host a movie marathon with some friends',
                    'de'    => 'Veranstalte einen Filmmarathon mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 3,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Plant a tree',
                    'de'    => 'Einen Baum pflanzen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a daily journal',
                    'de'    => 'Beginne ein tägliches Tagebuch',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take a class at your local community center that interests you',
                    'de'    => 'Besuche einen Kurs in deinem örtlichen Gemeindezentrum, der dich interessiert',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Solve a Rubik\'s cube',
                    'de'    => 'Löse einen Rubik\'s Cube',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make your own LEGO creation',
                    'de'    => 'Baue deine eigene LEGO Kreation',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to french braid hair',
                    'de'    => 'Lerne, wie man einen französischen Zopf flechtet',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go for a run',
                    'de'    => 'Laufen gehen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Mow your lawn',
                    'de'    => 'Mähe deinen Rasen',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Hold a yard sale',
                    'de'    => 'Halte einen Hofverkauf ab',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a jam session with your friends',
                    'de'    => 'Veranstalte eine Jamsession mit deinen Freunden',
                ],
                'category' => 'music',
                'person'   => 5,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn the NATO phonetic alphabet',
                    'de'    => 'Lerne das phonetische Alphabet der NATO',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/NATO_phonetic_alphabet',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Start a garden',
                    'de'    => 'Einen Garten anlegen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize your pantry',
                    'de'    => 'Organisiere deine Speisekammer',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to use a french press',
                    'de'    => 'Lerne, wie man eine French Press benutzt',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/French_press',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Invite some friends over for a game night',
                    'de'    => 'Lade ein paar Freunde zu einem Spieleabend ein',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a concert with local artists with some friends',
                    'de'    => 'Besuche mit ein paar Freunden ein Konzert mit lokalen Künstlern',
                ],
                'category' => 'social',
                'person'   => 3,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Prepare a 72-hour kit',
                    'de'    => 'Bereite ein 72-Stunden-Kit vor',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => [
                    'en-US' => 'https://www.ready.gov/kit',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Do a jigsaw puzzle',
                    'de'    => 'Mach ein Puzzlespiel',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Jigsaw_puzzle',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Learn origami',
                    'de'    => 'Origami lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Volunteer at your local food bank',
                    'de'    => 'Arbeite ehrenamtlich bei deiner örtlichen Lebensmittelbank',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Volunteer at your local food pantry',
                    'de'    => 'Arbeite ehrenamtlich in deiner örtlichen Speisekammer',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn to play a new instrument',
                    'de'    => 'Lerne ein neues Instrument zu spielen',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Text a friend you haven\'t talked to in a long time',
                    'de'    => 'Schreibe einem Freund, mit dem du schon lange nicht mehr gesprochen hast',
                ],
                'category' => 'social',
                'person'   => 2,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn woodworking',
                    'de'    => 'Holzbearbeitung lernen',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a note of appreciation to someone',
                    'de'    => 'Schreibe jemandem eine Nachricht der Wertschätzung',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take a spontaneous road trip with some friends',
                    'de'    => 'Mache einen spontanen Roadtrip mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn Express.js',
                    'de'    => 'Express.js lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://expressjs.com/',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Play basketball with a group of friends',
                    'de'    => 'Spiele Basketball mit einer Gruppe von Freunden',
                ],
                'category' => 'social',
                'person'   => 5,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Listen to your favorite album',
                    'de'    => 'Hör dir dein Lieblingsalbum an',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Play a volleyball match with some friends',
                    'de'    => 'Spiele ein Volleyballspiel mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Fill out a basketball bracket',
                    'de'    => 'Fülle eine Basketball-Konsole aus',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make bread from scratch',
                    'de'    => 'Brot von Grund auf neu backen',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Clean out your garage',
                    'de'    => 'Entrümple deine Garage',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go see a Broadway production',
                    'de'    => 'Sieh dir eine Broadway-Produktion an',
                ],
                'category' => 'fun',
                'person'   => 4,
                'cost'     => '$$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a local thrift shop',
                    'de'    => 'Geh in einen örtlichen Secondhand-Laden',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a handwritten letter to somebody',
                    'de'    => 'Schreibe einen handgeschriebenen Brief an jemanden',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Clean out your refrigerator',
                    'de'    => 'Räum deinen Kühlschrank aus',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a scrapbook with pictures of your favorite memories',
                    'de'    => 'Mache ein Sammelalbum mit Bildern deiner schönsten Erinnerungen',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Shred old documents you don\'t need anymore',
                    'de'    => 'Schreddere alte Dokumente, die du nicht mehr brauchst',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Surprise your significant other with something considerate',
                    'de'    => 'Überrasche deinen Partner mit etwas Rücksichtsvollem',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a simple musical instrument',
                    'de'    => 'Baue ein einfaches Musikinstrument',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Listen to a new music genre',
                    'de'    => 'Höre ein neues Musikgenre',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn Javascript',
                    'de'    => 'Javascript lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Color',
                    'de'    => 'Farbe',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Play a game of Monopoly',
                    'de'    => 'Spiele eine Partie Monopoly',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to write in shorthand',
                    'de'    => 'Lerne, wie man in Kurzschrift schreibt',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take a hike at a local park',
                    'de'    => 'Mach eine Wanderung in einem örtlichen Park',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a blog for something you\'re passionate about',
                    'de'    => 'Starte einen Blog für etwas, das dich begeistert',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn Kotlin',
                    'de'    => 'Kotlin lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://kotlinlang.org/',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Go stargazing',
                    'de'    => 'Sterne gucken gehen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to play a new sport',
                    'de'    => 'Lerne, wie man eine neue Sportart spielt',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Create a compost pile',
                    'de'    => 'Einen Komposthaufen anlegen',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Do yoga',
                    'de'    => 'Mach Yoga',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Donate blood at a local blood center',
                    'de'    => 'Spende Blut in einem örtlichen Blutspendezentrum',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://www.redcross.org/give-blood',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Go see a movie in theaters with a few friends',
                    'de'    => 'Mit ein paar Freunden einen Film im Kino sehen',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Watch the sunset or the sunrise',
                    'de'    => 'Beobachte den Sonnenuntergang oder den Sonnenaufgang',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Plan a trip to another country',
                    'de'    => 'Plane eine Reise in ein anderes Land',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a new friend',
                    'de'    => 'Einen neuen Freund finden',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a book you\'ve never gotten around to reading',
                    'de'    => 'Fang ein Buch an, das du noch nicht gelesen hast',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to the library and find an interesting book',
                    'de'    => 'Geh in die Bibliothek und finde ein interessantes Buch',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how the internet works',
                    'de'    => 'Lerne, wie das Internet funktioniert',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a photo session with some friends',
                    'de'    => 'Mach eine Fotosession mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize your basement',
                    'de'    => 'Organisiere deinen Keller',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to use an Arduino',
                    'de'    => 'Lerne, wie man einen Arduino benutzt',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Arduino',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Learn GraphQL',
                    'de'    => 'GraphQL lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://graphql.org/',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to fold a paper crane',
                    'de'    => 'Lerne, wie man einen Papierkranich faltet',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn a new recipe',
                    'de'    => 'Lerne ein neues Rezept',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn to write with your nondominant hand',
                    'de'    => 'Lerne, mit deiner nicht dominanten Hand zu schreiben',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn the Chinese erhu',
                    'de'    => 'Lerne die chinesische Erhu',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Find a DIY to do',
                    'de'    => 'Finde ein DIY zum Selbermachen',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take your dog on a walk',
                    'de'    => 'Geh mit deinem Hund spazieren',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Visit a nearby museum',
                    'de'    => 'Besuche ein Museum in der Nähe',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Back up important computer files',
                    'de'    => 'Sichern Sie wichtige Computerdateien',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take a bubble bath',
                    'de'    => 'Nimm ein Schaumbad',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize your music collection',
                    'de'    => 'Organisiere deine Musiksammlung',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Give your pet ten minutes of focused attention',
                    'de'    => 'Schenke deinem Tier zehn Minuten konzentrierte Aufmerksamkeit',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a music festival with some friends',
                    'de'    => 'Mit ein paar Freunden auf ein Musikfestival gehen',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Memorize the fifty states and their capitals',
                    'de'    => 'Lerne die fünfzig Staaten und ihre Hauptstädte auswendig',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a karaoke bar with some friends',
                    'de'    => 'Mit ein paar Freunden in eine Karaoke-Bar gehen',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Uninstall unused apps from your devices',
                    'de'    => 'Deinstalliere ungenutzte Apps von deinen Geräten',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a to-do list for your week',
                    'de'    => 'Erstelle eine To-Do-Liste für deine Woche',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Read a formal research paper on an interesting subject',
                    'de'    => 'Lies eine formale Forschungsarbeit über ein interessantes Thema',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a picnic with some friends',
                    'de'    => 'Mach ein Picknick mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 3,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a bonfire with your close friends',
                    'de'    => 'Mach ein Lagerfeuer mit deinen engen Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Hold a video game tournament with some friends',
                    'de'    => 'Veranstalte ein Videospiel-Turnier mit ein paar Freunden',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Listen to a new podcast',
                    'de'    => 'Einen neuen Podcast anhören',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Explore a park you have never been to before',
                    'de'    => 'Erkunde einen Park, in dem du noch nie gewesen bist',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Have a football scrimmage with some friends',
                    'de'    => 'Ein Fußballspiel mit ein paar Freunden veranstalten',
                ],
                'category' => 'social',
                'person'   => 8,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize your dresser',
                    'de'    => 'Organisiere deine Kommode',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Pot some plants and put them around your house',
                    'de'    => 'Pflanzen eintopfen und um dein Haus herum aufstellen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Bake something you\'ve never tried before',
                    'de'    => 'Backe etwas, das du noch nie probiert hast',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn about the Golden Ratio',
                    'de'    => 'Lerne den Goldenen Schnitt kennen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Golden_ratio',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Draft your living will',
                    'de'    => 'Setze deine Patientenverfügung auf',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://www.investopedia.com/terms/l/livingwill.asp',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Create and follow a savings plan',
                    'de'    => 'Erstelle und befolge einen Sparplan',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Plan a vacation you\'ve always wanted to take',
                    'de'    => 'Plane einen Urlaub, den du schon immer machen wolltest',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to make an Alexa skill',
                    'de'    => 'Lerne, wie man einen Alexa Skill erstellt',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://developer.amazon.com/en-US/docs/alexa/custom-skills/steps-to-build-a-custom-skill.html',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Rearrange and organize your room',
                    'de'    => 'Ordne dein Zimmer neu und organisiere es',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Do something you used to do as a kid',
                    'de'    => 'Tu etwas, was du als Kind getan hast',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a band',
                    'de'    => 'Eine Band gründen',
                ],
                'category' => 'music',
                'person'   => 4,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Sit in the dark and listen to your favorite music with no distractions',
                    'de'    => 'Sitze im Dunkeln und höre deine Lieblingsmusik, ohne Ablenkung',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a couch fort',
                    'de'    => 'Baue eine Sofafestung',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Compliment someone',
                    'de'    => 'Jemandem ein Kompliment machen',
                ],
                'category' => 'social',
                'person'   => 2,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Conquer one of your fears',
                    'de'    => 'Überwinde eine deiner Ängste',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn a new programming language',
                    'de'    => 'Lerne eine neue Programmiersprache',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Catch up with a friend over a lunch date',
                    'de'    => 'Triff dich mit einem Freund zu einem Mittagessen',
                ],
                'category' => 'social',
                'person'   => 2,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Organize a bookshelf',
                    'de'    => 'Ein Bücherregal organisieren',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Find a charity and donate to it',
                    'de'    => 'Finde eine Wohltätigkeitsorganisation und spende für sie',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Do something nice for someone you care about',
                    'de'    => 'Tu etwas Nettes für jemanden, der dir wichtig ist',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Bake pastries for you and your neighbor',
                    'de'    => 'Backe Gebäck für dich und deinen Nachbarn',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Match your storage containers with their lids',
                    'de'    => 'Passe deine Vorratsbehälter mit ihren Deckeln an',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Create or update your resume',
                    'de'    => 'Erstelle oder aktualisiere deinen Lebenslauf',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Donate to your local food bank',
                    'de'    => 'Spende an deine örtliche Lebensmittelbank',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn the periodic table',
                    'de'    => 'Lerne das Periodensystem',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Periodic_table',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Play a video game',
                    'de'    => 'Spiele ein Videospiel',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn and play a new card game',
                    'de'    => 'Lerne und spiele ein neues Kartenspiel',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://www.pagat.com',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Visit your past teachers',
                    'de'    => 'Besuche deine früheren Lehrer',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Watch a Khan Academy lecture on a subject of your choosing',
                    'de'    => 'Sieh dir eine Khan Academy Vorlesung zu einem Thema deiner Wahl an',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://www.khanacademy.org/',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Create a meal plan for the coming week',
                    'de'    => 'Erstelle einen Essensplan für die kommende Woche',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Memorize a favorite quote or poem',
                    'de'    => 'Ein Lieblingszitat oder -gedicht auswendig lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Pull a harmless prank on one of your friends',
                    'de'    => 'Einem deiner Freunde einen harmlosen Streich spielen',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Volunteer at a local animal shelter',
                    'de'    => 'Arbeite ehrenamtlich in einem örtlichen Tierheim',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn to sew on a button',
                    'de'    => 'Lerne, einen Knopf anzunähen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a collection',
                    'de'    => 'Eine Sammlung starten',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a poem',
                    'de'    => 'Ein Gedicht schreiben',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a short story',
                    'de'    => 'Schreibe eine Kurzgeschichte',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Wash your car',
                    'de'    => 'Wasch dein Auto',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Configure two-factor authentication on your accounts',
                    'de'    => 'Konfiguriere die Zwei-Faktor-Authentifizierung für deine Konten',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Multi-factor_authentication',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Shop at support your local farmers market',
                    'de'    => 'Kaufe auf deinem lokalen Bauernmarkt ein',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn to greet someone in a new language',
                    'de'    => 'Lerne, jemanden in einer neuen Sprache zu begrüßen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a song',
                    'de'    => 'Schreibe einen Song',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Fix something that\'s broken in your house',
                    'de'    => 'Repariere etwas, das in deinem Haus kaputt ist',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a concert with some friends',
                    'de'    => 'Mit ein paar Freunden auf ein Konzert gehen',
                ],
                'category' => 'social',
                'person'   => 4,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Meditate for five minutes',
                    'de'    => 'Meditiere fünf Minuten lang',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make tie dye shirts',
                    'de'    => 'Krawattenfärbehemden herstellen',
                ],
                'category' => 'DIY',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to the gym',
                    'de'    => 'Geh ins Fitnessstudio',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Patronize a local independent restaurant',
                    'de'    => 'Besuche ein lokales unabhängiges Restaurant',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Draw and color a Mandala',
                    'de'    => 'Zeichne und male ein Mandala',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Mandala',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Go on a long drive with no music',
                    'de'    => 'Eine lange Autofahrt ohne Musik machen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Create a cookbook with your favorite recipes',
                    'de'    => 'Erstelle ein Kochbuch mit deinen Lieblingsrezepten',
                ],
                'category' => 'cook',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to whistle with your fingers',
                    'de'    => 'Lerne, mit deinen Fingern zu pfeifen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Practice coding in your favorite lanaguage',
                    'de'    => 'Übe Kodierung in deiner Lieblingssprache',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a webinar on a topic of your choice',
                    'de'    => 'Starte ein Webinar zu einem Thema deiner Wahl',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take your cat on a walk',
                    'de'    => 'Nimm deine Katze mit auf einen Spaziergang',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to make a website',
                    'de'    => 'Lerne, wie man eine Website erstellt',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Bake a pie with some friends',
                    'de'    => 'Backe einen Kuchen mit ein paar Freunden',
                ],
                'category' => 'cook',
                'person'   => 3,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Draw something interesting',
                    'de'    => 'Zeichne etwas Interessantes',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Think of a new business idea',
                    'de'    => 'Überlege dir eine neue Geschäftsidee',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a bucket list',
                    'de'    => 'Mache eine Bucket List',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Go to a nail salon',
                    'de'    => 'Geh in ein Nagelstudio',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Catch up on world news',
                    'de'    => 'Informiere dich über die Weltnachrichten',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Look at pictures and videos of cute animals',
                    'de'    => 'Schau dir Bilder und Videos von niedlichen Tieren an',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Buy a new house decoration',
                    'de'    => 'Kaufe eine neue Hausdekoration',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Take a caffeine nap',
                    'de'    => 'Mach ein Koffein-Nickerchen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn about a distributed version control system such as Git',
                    'de'    => 'Lerne ein verteiltes Versionskontrollsystem wie Git kennen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Distributed_version_control',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Take a nap',
                    'de'    => 'Mach ein Nickerchen',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Improve your touch typing',
                    'de'    => 'Verbessere dein Touch-Tippen',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Touch_typing',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Listen to music you haven\'t heard in a while',
                    'de'    => 'Höre Musik, die du schon lange nicht mehr gehört hast',
                ],
                'category' => 'music',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Start a family tree',
                    'de'    => 'Einen Stammbaum beginnen',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Family_tree',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Learn Morse code',
                    'de'    => 'Morsezeichen lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Morse_code',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Organize your movie collection',
                    'de'    => 'Organisiere deine Filmsammlung',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to beatbox',
                    'de'    => 'Lerne wie man beatboxt',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => [
                    'en-US' => 'https://en.wikipedia.org/wiki/Beatboxing',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Paint the first thing you see',
                    'de'    => 'Male das Erste, was du siehst',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Try a food you don\'t like',
                    'de'    => 'Probiere ein Essen, das du nicht magst',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Learn how to iceskate or rollerskate',
                    'de'    => 'Lerne Schlittschuhlaufen oder Rollschuhlaufen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Play a game of tennis with a friend',
                    'de'    => 'Spiele eine Partie Tennis mit einem Freund',
                ],
                'category' => 'social',
                'person'   => 2,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Make a budget',
                    'de'    => 'Mach ein Budget',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Watch a classic movie',
                    'de'    => 'Einen Filmklassiker anschauen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Write a thank you letter to an influential person in your life',
                    'de'    => 'Schreibe einen Dankesbrief an eine einflussreiche Person in deinem Leben',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Research a topic you\'re interested in',
                    'de'    => 'Recherchiere ein Thema, das dich interessiert',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Create a personal website',
                    'de'    => 'Eine persönliche Website erstellen',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Contribute code or a monetary donation to an open-source software project',
                    'de'    => 'Code oder eine Geldspende für ein Open-Source-Softwareprojekt beisteuern',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => '$',
                'links'    => [
                    'en-US' => 'https://github.com/explore',
                ],
            ],
            [
                'task'     => [
                    'en-US' => 'Learn calligraphy',
                    'de'    => 'Kalligraphie lernen',
                ],
                'category' => 'learn',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Binge watch a trending series',
                    'de'    => 'Binge Watching einer aktuellen Serie',
                ],
                'category' => 'fun',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Teach your dog a new trick',
                    'de'    => 'Bring deinem Hund einen neuen Trick bei',
                ],
                'category' => 'resting',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Resolve a problem you\'ve been putting off',
                    'de'    => 'Löse ein Problem, das du aufgeschoben hast',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Clean out your closet and donate the clothes you\'ve outgrown',
                    'de'    => 'Entrümple deinen Kleiderschrank und spende die Kleidung, aus der du herausgewachsen bist',
                ],
                'category' => 'charity',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Explore the nightlife of your city',
                    'de'    => 'Erkunde das Nachtleben in deiner Stadt',
                ],
                'category' => 'social',
                'person'   => 1,
                'cost'     => '$',
                'links'    => null,
            ],
            [
                'task'     => [
                    'en-US' => 'Clean out your car',
                    'de'    => 'Entrümple dein Auto',
                ],
                'category' => 'staying busy',
                'person'   => 1,
                'cost'     => 'free',
                'links'    => null,
            ],
        ];

        foreach ($data as $task) {
            Task::create($task);
        }

    }
}
