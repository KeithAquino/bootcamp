function runActivity() {
  let db = {
    title: "Kirby's Album Listing",
    last_updated: "2023-05-10",
    album_list: [
      {
        album_id: 0,
        album_name: "In Rainbows",
        album_artist: "Radiohead",
        album_release_year: 2007,
        album_ratings: [
          {
            rater_name: "Metacritic",
            rater_rating: 88,
            rater_rating_max: 100,
          },
          {
            rater_name: "Pitchfork",
            rater_rating: 9.3,
            rater_rating_max: 10,
          },
        ],
        track_list: [
          {
            track_no: 0,
            track_name: "15 Steps",
            track_time: {
              track_min: "3",
              track_sec: "58",
            },
          },
          {
            track_no: 1,
            track_name: "Bodysnatchers",
            track_time: {
              track_min: "4",
              track_sec: "2",
            },
          },
          {
            track_no: 2,
            track_name: "Nude",
            track_time: {
              track_min: "4",
              track_sec: "15",
            },
          },
        ],
      },
      {
        album_id: 1,
        album_name: "Animals",
        album_artist: "This Town Needs Guns",
        album_release_year: 2008,
        album_ratings: [
          {
            rater_name: "Absolute Punk",
            rater_rating: 80,
            rater_rating_max: 100,
          },
          {
            rater_name: "Sputnikmusic",
            rater_rating: 4,
            rater_rating_max: 5,
          },
        ],
        track_list: [
          {
            track_no: 0,
            track_name: "Chinchilla",
            track_time: {
              track_min: "4",
              track_sec: "22",
            },
          },
          {
            track_no: 1,
            track_name: "Baboon",
            track_time: {
              track_min: "3",
              track_sec: "26",
            },
          },
          {
            track_no: 2,
            track_name: "Lemur",
            track_time: {
              track_min: "3",
              track_sec: "9",
            },
          },
        ],
      },
      {
        album_id: 2,
        album_name: "Good Kid, M.A.A.D City",
        album_artist: "Kendrick Lamar",
        album_release_year: 2012,
        album_ratings: [
          {
            rater_name: "Metacritic",
            rater_rating: 91,
            rater_rating_max: 100,
          },
          {
            rater_name: "Pitchfork",
            rater_rating: 9.5,
            rater_rating_max: 10,
          },
        ],
        track_list: [
          {
            track_no: 0,
            track_name: "Sherane a.k.a Master Splinter's Daughter",
            track_time: {
              track_min: "4",
              track_sec: "33",
            },
          },
          {
            track_no: 1,
            track_name: "B*tch Don't Kill My Vibe",
            track_time: {
              track_min: "5",
              track_sec: "10",
            },
          },
          {
            track_no: 2,
            track_name: "Backseat Freestyle",
            track_time: {
              track_min: "3",
              track_sec: "32",
            },
          },
        ],
      },
    ],
  };
  console.log(db.title);
  console.log(db.last_updated);
  console.log(db.album_list[0].album_artist);
  console.log(db.album_list[1].album_release_year);
  console.log(db.album_list[2].album_ratings[0].rater_rating_max);
  console.log(db.album_list[2].track_list[0].track_name);
  console.log(db.album_list[0].track_list[2].track_time.track_min);
  console.log(db.album_list[1].track_list[1].track_time.track_sec);
  console.log(db.album_list[0].album_ratings[0].rater_rating);
  console.log(db.album_list.length);
  console.log(db.album_list[1].track_list.length);
  for (let i = 0; i < db.album_list.length; i++) {
    console.log(db.album_list[i].album_name);
  }
  for (let i = 0; i < db.album_list[2].track_list.length; i++) {
    console.log(db.album_list[2].track_list[i].track_name);
  }
}
