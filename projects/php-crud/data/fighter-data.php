<?php

$fighters = [
    [
        'id' => 0,
        'name' => 'Ryu',
        'playstyle' => 'Shoto',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/ryu.png?h=51778c13c01235d62adfa5eb90016638',
        'quote' => 'This is the path of my destiny!',
        'audio' => './voice/ryu.mp3',
        'occupation' => 'Martial Artist',
        'description' => 'The main protagonist of the Street Fighter series, first appearing in the original Street Fighter. He is an experienced martial artist, highly focused on his training, aiming to become the strongest he can.',
        'arch-enemy' => 1,
        'ally' => 2,
        'costumes' => [
            'one' => './images/ryu/ryu-one.webp',
            'two' => './images/ryu/ryu-two.webp',
            'three' => './images/ryu/ryu-three.webp',
            'four' => './images/ryu/ryu-four.webp',
            'five' => './images/ryu/ryu-five.webp',
            'six' => './images/ryu/ryu-six.webp'
        ],
        'specials' => [['Hadouken', './gifs/hado.webp'], ['Tatsumaki', './gifs/tatsu.webp'], ['Shoryuken', './gifs/shoru.webp']]
    ],
    [
        'id' => 1,
        'name' => 'M.Bison',
        'playstyle' => 'Charge',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/veg.png?h=05940c2c8feafe94aa6ced8003b4b2dc',
        'quote' => 'Bow down before my Psycho Power!',
        'audio' => './voice/dictator.mp3',
        'occupation' => 'Shadaloo King (leader)',
        'description' => 'M. Bison is an archetypal villain motivated by his own self-serving interests and lust for absolute power through world domination. He is a megalomaniacal and psychopathic dictator and terrorist who seeks to rule the world with an iron fist whilst also being universally regarded as the greatest and most powerful martial artist of all time',
        'arch-enemy' => 0,
        'ally' => '',
        'costumes' => [
            'one' => './images/bison/bison-one.webp',
            'two' => './images/bison/bison-two.webp',
            'three' => './images/bison/bison-three.webp',
            'four' => './images/bison/bison-four.webp',
        ],
        'specials' => [['Crusher', './gifs/crusher.webp'], ['Knee Press', './gifs/knee.webp'], ['Devil Rev.', './gifs/devil.webp']]
    ],
    [
        'id' => 2,
        'name' => 'Guile',
        'playstyle' => 'Zoner',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/gul.png?h=13fa8b86069fbb4beafe9622893ae48b',
        'quote' => 'No need for talk. Let’s do this!',
        'audio' => './voice/guile.mp3',
        'occupation' => 'Major of the United States Air Force',
        'description' => 'A US Air Force pilot who fights for his country, Guile succeeded in dismantling Shadaloo and avenging his friend Charlie. He enjoys living the family man life, but new battlefields await him.',
        'arch-enemy' => '',
        'ally' => 0,
        'costumes' => [
            'one' => './images/guile/gul-one.webp',
            'two' => './images/guile/gul-two.webp',
            'three' => './images/guile/gul-three.webp',
            'four' => './images/guile/gul-four.webp',
            'five' => './images/guile/gul-five.webp',

        ],
        'specials' => [['Sonic Boom', './gifs/booom.webp'], ['Flash Kick', './gifs/kick.webp'], ['Hurricane', './gifs/hurricane.webp']]
    ],
    [
        'id' => 3,
        'name' => 'Zangief',
        'playstyle' => 'Grappler',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/zgf.png?h=4ae8ea4293c0db3829278dba98deac8a',
        'quote' => 'I am...the Red Cyclone!',
        'audio' => './voice/zan.mp3',
        'occupation' => 'Professional Wrestler',
        'description' => 'Zangief enters any and all Street Fighting tournaments purely to prove his worth as the greatest wrestler in the world and to maintain his reputation as the Red Cyclone. He is extremely proud of his motherland, the Soviet Union, and he is determined to represent it as the champion of each tournament.',
        'arch-enemy' => '',
        'ally' => '',
        'costumes' => [
            'one' => './images/zan/zan-one.webp',
            'two' => './images/zan/zan-two.webp',
            'three' => './images/zan/zan-three.webp',
            'four' => './images/zan/zan-four.webp',
            'five' => './images/zan/zan-five.webp',

        ],
        'specials' => [['Piledriver', './gifs/pile.gif'], ['Lariat', './gifs/lariat.webp'], ['Green Hand', './gifs/hand.webp']]
    ],
    [
        'id' => 4,
        'name' => 'Rashid',
        'playstyle' => 'Shoto',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/rsd.png?h=f2a8cc6f5fb27836fa517e96cddc2337',
        'quote' => 'I’m Rashid of the Turbulent Wind! Remember the name well!',
        'audio' => './voice/ras.mp3',
        'occupation' => 'Socialite',
        'description' => 'Rashid is the eldest son of an old aristocratic Middle Eastern family who’s traveling the world in search of a missing friend who has been kidnapped by Shadaloo.',
        'costumes' => [
            'one' => './images/ras/ras-one.webp',
            'two' => './images/ras/ras-two.webp',
            'three' => './images/ras/ras-three.webp',
            'four' => './images/ras/ras-four.webp',
            'five' => './images/ras/ras-five.webp',
            'six' => './images/ras/ras-five.webp',

        ],
        'specials' => [['Whirlwind', './gifs/shot.webp'], ['Eagle Spike', './gifs/spike.webp'], ['Mixer', './gifs/mixer.webp']]
    ],
    [
        'id' => 5,
        'name' => 'Chun-li',
        'playstyle' => 'Charge',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/cnl.png?h=cdcdad24aed42606eede35add77e6d11',
        'quote' => 'Want to see my Kung-Fu? I’ll show you.',
        'audio' => './voice/chun.mp3',
        'occupation' => 'Investigator for the ICPO',
        'description' => 'Freshly initiated into the Interpol ranks, Chun-Li is in pursuit of M. Bison and all of the information that she can obtain about his army’s whereabouts. However, many of Chun-Li’s efforts are thwarted and she makes little progress in locating Bison throughout the tournament. Bison’s attentions are on a particular martial artist known as Ryu',
        'arch-enemy' => 1,
        'ally' => [0, 2],
        'costumes' => [
            'one' => './images/chun/chun-one.webp',
            'two' => './images/chun/chun-two.webp',
            'three' => './images/chun/chun-three.webp',
            'four' => './images/chun/chun-four.webp',
            'five' => './images/chun/chun-five.webp',
            'six' => './images/chun/chun-five.webp',

        ],
        'specials' => [['Kikoken', './gifs/kiko.webp'], ['Spinning Bird', './gifs/bird.webp'], ['Lightning Legs', './gifs/legs.webp']]
    ],
    [
        'id' => 6,
        'name' => 'Necalli',
        'playstyle' => 'Grappler',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/ncl.png?h=0339842bc100b496aa5ebcc60168a6c6',
        'quote' => 'Devour-our-our...',
        'audio' => './voice/nec.mp3',
        'occupation' => null,
        'description' => "Necalli is described as the 'Emissary of the Gods', with a rather ominous moniker of 'The Soul Consuming Darkness'. As the Warrior Prophet reveals, every few hundred years the stars herald the 'Hour of Battle' ('Hour of Necalli'). During this period of time Necalli awakens to consume the souls of strong warriors.'",
        'costumes' => [
            'one' => './images/nec/nec-one.webp',
            'two' => './images/nec/nec-two.webp',
            'three' => './images/nec/nec-three.webp',
            'four' => './images/nec/nec-four.webp',
            'five' => './images/nec/nec-five.webp',

        ],
        'specials' => [['Mask of Tlalli', './gifs/mask.webp'], ['Rebellion', './gifs/rebl.webp'], ['Raging Light', './gifs/light.webp']]
    ],
    [
        'id' => 7,
        'name' => 'Dhalsim',
        'playstyle' => 'Zoner',
        'portrait' => 'https://game.capcom.com/cfn/sfv/as/common/character/bustup/l/dsm.png?h=831bf42208028686d3edefc248f28bdb',
        'quote' => 'I’m not very fond of conflict.',
        'audio' => './voice/dha.mp3',
        'occupation' => 'Yoga Master',
        'description' => 'Dhalsim enters the tournament to raise money for his village, but realizes that it contradicts his pacifist beliefs. Dhalsim retires from fighting after the second World Warrior tournament, and continues to roam the world helping those in need. This character possesses limbs that extend across the screen to keep opponents away.',
        'ally' => 1,
        'costumes' => [
            'one' => './images/dha/dha-one.webp',
            'two' => './images/dha/dha-two.webp',
            'three' => './images/dha/dha-three.webp',
            'four' => './images/dha/dha-four.webp',
            'five' => './images/dha/dha-five.webp',
        ],
        'specials' => [['Yoga Fire', './gifs/fire.webp'], ['Yoga Flame', './gifs/flame.webp'], ['Yoga Kick', './gifs/kick.gif']]
    ],

];
