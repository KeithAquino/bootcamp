const games = [
  {
    item_id: 0,
    item_name: "God of War",
    platform: "PS4",
    genre: "Action",
    price: "₱1199.99",
    image_card: "img/god_of_war_card.jpg",
    image_main: "img/god_of_war_main.jpg",
    item_desc:
      "Kratos is a father again. As mentor and protector to Atreus, a son determined to earn his respect, he is forced to deal with and control the rage that has long defined him while out in a very dangerous world with his son. This staggering reimagining of God of War combines all the hallmarks of the iconic series brutal combat, epic boss fights, and breathtaking scale and fuses them with a powerful and moving narrative that re-establishes Kratos' world. ",
  },
  {
    item_id: 1,
    item_name: "Grand Theft Auto V",
    platform: "PS5",
    genre: "Action, Adventure",
    price: "₱399.99",
    image_card: "img/gta_v_card.jpg",
    image_main: "img/gta_v_main.jpg",
    item_desc:
      "Experience blockbuster hits Grand Theft Auto V and GTA Online - now upgraded for PlayStation 5 with stunning visuals, faster loading, adaptive triggers, haptic feedback, Tempest 3D audio and more, plus exclusive content for GTA Online players.",
  },
  {
    item_id: 2,
    item_name: "EA Sports FC 24",
    platform: "PS4, PS5",
    genre: "Sports",
    price: "₱4299.99",
    image_card: "img/fc_24_card.jpg",
    image_main: "img/fc_24_main.jpg",
    item_desc:
      "EA SPORTS FC™ 24 marks the beginning of the future of football. Built on innovation and authenticity, feel closer to the game in the most true-to-football experience yet with the best players from the biggest clubs, leagues and competitions around the globe. With more than 19,000 fully licensed players, 700 teams and 30 leagues including the UEFA Men's and Women's Champions League, EA SPORTS FC 24 brings unrivalled authenticity to the pitch.",
  },
  {
    item_id: 3,
    item_name: "Baldur's Gate 3",
    platform: "PS5",
    genre: "Role-Playing",
    price: "₱4199.99",
    image_card: "img/baldur_3_card.jpg",
    image_main: "img/baldur_3_main.jpg",
    item_desc:
      "Gather your party and embark on an epic campaign in this next-generation Dungeons & Dragons RPG from the makers of Divinity: Original Sin II. Join forces with a cast of complex characters as you loot, battle and romance your way through the Forgotten Realms and beyond. Roll for initiative and leverage both advantage and disadvantage with fluid, tactical combat. The fate of the Forgotten Realms is in your hands.",
  },
  {
    item_id: 4,
    item_name: "Marvel's Spider-Man 2",
    platform: "PS5",
    genre: "Action",
    price: "₱4399.99",
    image_card: "img/spiderman_2_card.jpg",
    image_main: "img/spiderman_2_main.jpg",
    item_desc:
      "Spider-Men, Peter Parker and Miles Morales, return for an exciting new adventure in the critically acclaimed Marvel's Spider-Man franchise for PS5. Swing, jump and utilize the new Web Wings to travel across Marvel's New York, quickly switching between Peter Parker and Miles Morales to experience different stories and epic new powers, as the iconic villain Venom threatens to destroy their lives, their city and the ones they love.",
  },
  {
    item_id: 5,
    item_name: "The Last of Us Part I",
    platform: "PS5",
    genre: "Action",
    price: "₱4399.99",
    image_card: "img/TLOU_1_card.jpg",
    image_main: "img/TLOU_1_main.jpg",
    item_desc:
      "In a ravaged civilisation, where infected and hardened survivors run rampant, Joel, a weary protagonist, is hired to smuggle 14-year-old Ellie out of a military quarantine zone. However, what starts as a small job soon transforms into a brutal cross-country journey. Includes the complete The Last of Us single-player story and celebrated prequel chapter, Left Behind, which explores the events that changed the lives of Ellie and her best friend Riley forever.",
  },
  {
    item_id: 6,
    item_name: "Cyberpunk 2077",
    platform: "PS5",
    genre: "Role-playing",
    price: "₱3499.99",
    image_card: "img/cyberpunk_card.jpg",
    image_main: "img/cyberpunk_main.jpg",
    item_desc:
      "Cyberpunk 2077 is an open-world action-adventure from the creators of The Witcher 3: Wild Hunt, CD Projekt Red. Set in Night City, a megalopolis obsessed with power, glamour and body modification, you play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. Upgraded with next-gen in mind and featuring free additional content, customise your character and playstyle as you take on jobs, build a reputation, and unlock upgrades. The relationships you forge and the choices you make will shape the story and the world around you. Legends are made here. What will yours be?",
  },
  {
    item_id: 7,
    item_name: "Red Dead Redemption 2",
    platform: "PS4",
    genre: "Action-adventure, Western",
    price: "₱5299.99",
    image_card: "img/red_dead_2_card.jpg",
    image_main: "img/red_dead_2_main.jpg",
    item_desc:
      "America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed. After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive.",
  },
  {
    item_id: 8,
    item_name: "Sekiro: Shadows Die Twice",
    platform: "PS4",
    genre: "Adventure",
    price: "₱3499.99",
    image_card: "img/sekiro_card.jpg",
    image_main: "img/sekiro_main.jpg",
    item_desc:
      "In Sekiro: Shadows Die Twice you are the 'one-armed wolf', a disgraced and disfigured warrior rescued from the brink of death. Bound to protect a young lord who is the descendant of an ancient bloodline, you become the target of many vicious enemies, including the dangerous Ashina clan. When the young lord is captured, nothing will stop you on a perilous quest to regain your honor, not even death itself. Explore late 1500s Sengoku Japan, a brutal period of constant life and death conflict, as you come face to face with larger than life foes in a dark and twisted world. Unleash an arsenal of deadly prosthetic tools and powerful ninja abilities while you blend stealth, vertical traversal, and visceral head to head combat in a bloody confrontation.",
  },
  {
    item_id: 9,
    item_name: "Fallout 4",
    platform: "PS4",
    genre: "Role-playing",
    price: "₱1299.99",
    image_card: "img/fallout_4_card.jpg",
    image_main: "img/fallout_4_main.jpg",
    item_desc:
      "Bethesda Game Studios, the award-winning creators of Fallout 3 and Skyrim, welcomes you to the world of Fallout 4 . Winner of more than 50 Game of the Year awards, including top honors at the 2016 D.I.C.E. Awards. Fallout 4 is the studio's most ambitious game ever and the next generation of open-world gaming. As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Only you can rebuild and determine the fate of the Wasteland. Welcome home.",
  },
  {
    item_id: 10,
    item_name: "Ghost of Tsushima",
    platform: "PS4, PS5",
    genre: "Role-playing",
    price: "₱2299.99",
    image_card: "img/tsushima_card.jpg",
    image_main: "img/tsushima_main.jpg",
    item_desc:
      "Uncover the hidden wonders of Tsushima in this open-world action adventure from Sucker Punch Productions and PlayStation Studios, available for PS5 and PS4. Forge a new path and wage an unconventional war for the freedom of Tsushima. Challenge opponents with your katana, master the bow to eliminate distant threats, develop stealth tactics to ambush enemies and explore a new story on Iki Island.",
  },
  {
    item_id: 11,
    item_name: "DOOM Eternal",
    platform: "PS4, PS5",
    genre: "Shooter, Action",
    price: "₱1299.99",
    image_card: "img/doom_eternal_card.jpg",
    image_main: "img/doom_eternal_main.jpg",
    item_desc:
      "Hell's armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity. The only thing they fear... is you. Experience the ultimate combination of speed and power in DOOM Eternal - the next leap in push-forward, first-person combat.",
  },
  {
    item_id: 12,
    item_name: "Minecraft",
    platform: "PS4",
    genre: "Adventure",
    price: "₱1799.99",
    image_card: "img/minecraft_card.jpg",
    image_main: "img/minecraft_main.jpg",
    item_desc:
      "In Minecraft, your adventure starts with your imagination. Build anything you can imagine with unlimited resources in Creative mode, or go on grand expeditions in Survival, journeying across mysterious lands and into the depths of your own infinite worlds. Will you hide from monsters or craft tools, armour and weapons to fight back? No need to go alone!",
  },
  {
    item_id: 13,
    item_name: "STAR WARS Jedi: Survivor",
    platform: "PS5",
    genre: "Action",
    price: "₱5699.99",
    image_card: "img/jedi_survivor_card.jpg",
    image_main: "img/jedi_survivor_main.jpg",
    item_desc:
      "STAR WARS Jedi: Survivor™ picks up five years after the events of STAR WARS Jedi: Fallen Order™. Cal must stay one step ahead of the Empire's constant pursuit as he continues to feel the weight of being one of the last remaining Jedi in the galaxy. Developed by the veteran team at Respawn Entertainment, Jedi: Survivor will expand upon iconic STAR WARS stories, worlds, and characters, and thrilling combat first experienced in Jedi: Fallen Order.",
  },
  {
    item_id: 14,
    item_name: "Hades",
    platform: "PS4, PS5",
    genre: "Action",
    price: "₱1499.99",
    image_card: "img/hades_card.jpg",
    image_main: "img/hades_main.jpg",
    item_desc:
      "Wield the powers and mythic weapons of Olympus to break free from the clutches of the god of the dead himself, while growing stronger and unravelling more of the story with each unique escape attempt. Hades combines the best aspects of Supergiant's critically acclaimed titles, including the fast-paced action of Bastion, the rich atmosphere and depth of Transistor, and the character-driven storytelling of Pyre.",
  },
  {
    item_id: 15,
    item_name: "NieR:Automata",
    platform: "PS4",
    genre: "Action, Role-playing",
    price: "₱899.99",
    image_card: "img/hades_card.jpg",
    image_main: "img/hades_main.jpg",
    item_desc:
      "The story sets in a world where humanity has been driven from the Earth by mechanical beings from another world in a distant future. Players will take on the role of 2B who belongs to the new unit of android infantry known as YoRHa in a final effort to take back the planet. This is not your ordinary entertainment. It is a fresh take on the action role-playing game with a smooth 60fps open world that gracefully blends with a captivating story.",
  },
  {
    item_id: 16,
    item_name: "Devil May Cry 5",
    platform: "PS5",
    genre: "Action",
    price: "₱1799.99",
    image_card: "img/dmc_5_card.jpg",
    image_main: "img/dmc_5_main.jpg",
    item_desc:
      "A brand new entry in the legendary action series, Devil May Cry 5 brings together its signature blend of high-octane action and otherworldly original characters with the latest Capcom gaming technology to deliver a graphically groundbreaking action-adventure masterpiece.",
  },
  {
    item_id: 16,
    item_name: "Devil May Cry 5",
    platform: "PS5",
    genre: "Action",
    price: "₱1799.99",
    image_card: "img/dmc_5_card.jpg",
    image_main: "img/dmc_5_main.jpg",
    item_desc:
      "A brand new entry in the legendary action series, Devil May Cry 5 brings together its signature blend of high-octane action and otherworldly original characters with the latest Capcom gaming technology to deliver a graphically groundbreaking action-adventure masterpiece.",
  },
];

module.exports = { games };
