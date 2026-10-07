<section class="swipe-review-section">
<h2 class="section-title">RoomUs Reviews</h2>
<?php 

class RoomPerson
{
    public $naam;
    public $img;
    public $text;
    public function __construct(string $naam, $img, $text) {
        $this->naam = $naam;
        $this->img = $img;
        $this->text = $text;
    }

}
class RoomPair
{
    public RoomPerson $persoonA;
    public RoomPerson $persoonB;
    

    public function __construct(RoomPerson $persoonA, RoomPerson $persoonB) {
        $this->persoonA = $persoonA;
        $this->persoonB = $persoonB;
    }
}
$reviews = [
    new RoomPair(
    new RoomPerson("Milie", "./img/a-milie.png", "Via RoomUs heb ik Tom gevonden. We zijn nu goede vrienden en wonen samen in een superleuk huis! De app is overzichtelijk en het swipen werkt snel.") , 
    new RoomPerson("Tom", "./img/a-tom.png", "RoomUs maakt het makkelijk om een fijne huisgenoot te vinden. Ik ben blij met mijn nieuwe woning en het contact met Milie was meteen gezellig.")),
    
    new RoomPair(
    new RoomPerson("Mo", "./img/a-mo.png", "Het swipen was makkelijk en leuk. Dankzij RoomUs heb ik mijn ideale kamer en een gezellige roommate gevonden. Echt een aanrader voor studenten!") , 
    new RoomPerson("Emma", "./img/a-emma.png", "Ik vond Mo via RoomUs en het klikte meteen. We wonen nu samen en hebben het super naar ons zin. De service is top!")),
    
    new RoomPair(
    new RoomPerson("Peter", "./img/a-peter.png", "RoomUs heeft het zoeken naar een kamer echt leuk gemaakt. Sam en ik zijn een topmatch en het platform is heel gebruiksvriendelijk.") , 
    new RoomPerson("Sam", "./img/a-sam.png", "Dankzij RoomUs heb ik Peter leren kennen. We zijn nu goede vrienden en delen samen een mooi appartement."))
]
;

foreach($reviews as $review){ ?>
    <div class="review-contact-row">
        <div class="swipe-review-col">
        <div class="swipe-double-card">
        <div class="swipe-double-persons">
            <div class="swipe-person">
                <img src="<?=$review->persoonA->img ?>" alt="Milie" class="swipe-review-img">
                <span class="review-user"><?=$review->persoonA->naam ?></span>
                <p class="swipe-review-text"><?=$review->persoonA->text ?></p>
            </div>
             <div class="swipe-divider"></div>

            <div class="swipe-person">
                <img src="<?=$review->persoonB->img ?>" alt="Tom" class="swipe-review-img">
                <span class="review-roommate"><?=$review->persoonB->naam ?></span>
                <p class="swipe-review-text"><?=$review->persoonB->text ?></p>
            </div>
        </div>
    </div>
<?php } ?>

</section>