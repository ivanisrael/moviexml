create database app

drop table device

drop table theatre

create table user (user_id int not null GENERATED ALWAYS AS IDENTITY (START WITH 1 INCREMENT BY 1), username varchar(10), password varchar(10), PRIMARY KEY (user_id) )
create table theatre (theatre_id int not null GENERATED ALWAYS AS IDENTITY (START WITH 1 INCREMENT BY 1), movie_info xml, PRIMARY KEY (theatre_id))


INSERT INTO user (username, password) values ('db2user', 'db2user')

IMPORT from '/Users/GigaByte/Desktop/movie.del' of del xml from '/Users/GigaByte/Desktop/' INSERT INTO theatre(movie_info)



<?xml version="1.0" encoding="UTF-8"?>
<movies>
    <movie id="101">
        <title></title>
        <date>
            <year></year>
            <month></month>
            <day></day>
        </date>
        <genres>
            <genre id="1"></genre>
        </genres>
        <synopsis></synopsis>
        <duration></duration>
        <actors>
            <actor id="1">
                <name>
                    <fname></fname>
                    <lname></lname>
                </name>
                <role></role>
                <gender></gender>
            </actor>
        </actors>
    </movie>
</movies>


Find:

xquery for $d in db2-fn:xmlcolumn('THEATRE.MOVIE_INFO')/movies/movie let $emp := $d where $d[matches(title, 'Krampus')] order by $d/@id return $emp

xquery for $d in db2-fn:xmlcolumn('THEATRE.MOVIE_INFO')/movies/movie let $emp := $d where $d[matches(lower-case(title), lower-case('ra'))] order by $d/@id return $emp

xquery for $d in db2-fn:xmlcolumn('THEATRE.MOVIE_INFO')/movies let $emp := $d order by $d/@id return $emp


Add:
-general
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do insert <movie id="106"><title>Ivan</title><date><year>2015</year><month>Febuary</month><day>16</day></date><genres></genres><synopsis>Sample synopsis.</synopsis><duration>109 min</duration><actors></actors></movie> into $MOVIE_INFO/movies return $MOVIE_INFO') where theatre_id =1

-actor
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do insert <actor id="15"><name><fname>Ivan</fname><lname>Hernaez</lname></name><role>Main</role><gender>Male</gender></actor> into $MOVIE_INFO/movies/movie[@id="106"]/actors return $MOVIE_INFO') where theatre_id =1

-genre
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do insert <genre id="15">Comedy</genre> into $MOVIE_INFO/movies/movie[@id="106"]/genres return $MOVIE_INFO') where theatre_id =1

Edit:
-general
update theatre set movie_info = XMLQUERY('transform copy $MOVIE_INFO := $MOVIE_INFO modify (do replace $MOVIE_INFO/movies/movie[@id="101"]/title with <title>Ivan</title>, do replace $MOVIE_INFO/movies/movie[@id="101"]/duration with <duration>20 min </duration>, do replace $MOVIE_INFO/movies/movie[@id="101"]/date with <date><year>2001</year><month>March</month><day>25</day></date>, do replace $MOVIE_INFO/movies/movie[@id="101"]/synopsis with <synopsis>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</synopsis>) return $MOVIE_INFO') where theatre_id =1

-actor
update theatre set movie_info = XMLQUERY('transform copy $MOVIE_INFO := $MOVIE_INFO modify do replace $MOVIE_INFO/movies/movie[@id="106"]/actors/actor[@id="15"] with <actor id="15"><name><fname>Israel</fname><lname>Naez</lname></name><role>Tain</role><gender>Ale</gender></actor> return $MOVIE_INFO') where theatre_id =1

-genre
update theatre set movie_info = XMLQUERY('transform copy $MOVIE_INFO := $MOVIE_INFO modify do replace $MOVIE_INFO/movies/movie[@id="101"]/genres/genre[@id="1"] with <genre id="1">Fantasy</genre> return $MOVIE_INFO') where theatre_id =1

Delete:
-general
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do delete $MOVIE_INFO/movies/movie[@id="106"] return $MOVIE_INFO') where theatre_id =1

-actor
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do delete $MOVIE_INFO/movies/movie[@id="106"]/actors/actor[@id="15"] return $MOVIE_INFO') where theatre_id =1

-genre
update theatre set movie_info = XMLQUERY('copy $MOVIE_INFO := $MOVIE_INFO modify do delete $MOVIE_INFO/movies/movie[@id="106"]/genres/genre[@id="15"] return $MOVIE_INFO') where theatre_id =1






Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.


                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

