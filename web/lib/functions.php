<?php
    function checkEmail($clientEmail) {
        $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
        return $valEmail;
    }

    function createFitnessTable($rankId, $fitness) {
        $fitnessTable = "<h3 class='student-welcome'>Physical Fitness</h3>";
        $fitnessTable .= "<p class='student-welcome'>These are your stats from the last physical fitness test.</p>";
        $fitnessTable .= "<table class='curriculum-fitness student-welcome'>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th>Pushups: " . $fitness[0]['pushupsstyle'] . "</th>";
        $fitnessTable .= "<td class='fitness-noedit pushups'>" . $fitness[0]['pushups'] . "</td>";
        $fitnessTable .= "<td class='fitness-edit'><input name='pushups' id='pushups'></td>";
        $fitnessTable .= "</tr>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th>Leg Raises: " . $fitness[0]['legraisesstyle'] . "</th>";
        $fitnessTable .= "<td class='fitness-noedit legraises'>" . $fitness[0]['legraises'] . "</td>";
        $fitnessTable .= "<td class='fitness-edit'><input name='legraises' id='legraises'></td>";
        $fitnessTable .= " </tr>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th>Pullups: " . $fitness[0]['pullupsstyle'] . "</th>";
        $fitnessTable .= "<td class='fitness-noedit pullups'>" . $fitness[0]['pullups'] . "</td>";
        $fitnessTable .= "<td class='fitness-edit'><input name='pullups' id='pullups'></td>";
        $fitnessTable .= "</tr>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th>Jumps: " . $fitness[0]['jumpsstyle'] . "</th>";
        $fitnessTable .= "<td class='fitness-noedit jumps'>" . $fitness[0]['jumps'] . "</td>";
        $fitnessTable .= "<td class='fitness-edit'><input name='jumps' id='jumps'></td>";
        $fitnessTable .= "</tr>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th class='fitness-noedit'>Roundhouse Kicks (<span class='roundtime'>" . $fitness[0]['roundtime'] . "</span> per leg)</th>";
        $fitnessTable .= "<th class='fitness-edit'>Roundhouse Kicks (<input name='roundtime' id='roundtime'> seconds per leg)</th>";
        $fitnessTable .= "<td class='fitness-noedit'>R-<span class='roundright'>" . $fitness[0]['roundright'] . "</span> / L-<span class='roundleft'>" . $fitness[0]['roundleft'] . "</span></td>";
        $fitnessTable .= "<td class='fitness-edit'>R-<input name='roundright' id='roundright'> / L-<input name='roundleft' id='roundleft'></td>";
        $fitnessTable .= "</tr>";
        $fitnessTable .= "<tr>";
        $fitnessTable .= "<th>Stretch Test: " . $fitness[0]['stretchstyle'] . "</th>";
        $fitnessTable .= "<td class='fitness-noedit stretch'>" . $fitness[0]['stretch'] . "\"</td>";
        $fitnessTable .= "<td class='fitness-edit'><input name='stretch' id='stretch'>\"</td>";
        $fitnessTable .= "</tr>";
        $fitnessTable .= "</table> ";
        
        $fitnessTable .= '<button class="fitness-noedit btn btn-primary" id="editFitness">Edit Fitness Stats</button>';
        $fitnessTable .= '<button class="fitness-edit btn btn-primary" id="saveFitness">Save Fitness Stats</button>';
        $fitnessTable .= '<button class="fitness-edit btn btn-danger" id="cancelFitness">Cancel</button>';

        return $fitnessTable;
    }

    function createBeltSelect($rankId, $ranks) {
        $beltSelect = "<aside class='belt-select'>";
        $beltSelect .= "<span>Selected Belt Rank: </span>";
        $beltSelect .= "<select>";
        foreach ($ranks as $rank) {
            if ($rank['rankId'] == $rankId) {
                $beltSelect .= "<option value='$rank[rankid]' selected>$rank[rankname]</option>";
            } else {
                $beltSelect .= "<option value='$rank[rankid]'>$rank[rankname]</option>";
            }
        }
        $beltSelect .= "</select>";
        $beltSelect .= "</aside>";

        return $beltSelect;
    }

    function buildCategoryMenu($categories) {
        $categoryMenu = "";
        foreach ($categories as $category) {
            if ($category['categoryid'] < 7) {
                error_log($category['stripecolor']);
                $categoryMenu .= "<div class='".$category['stripecolor']."-stripe'>".$category['categoryename']."</div>";
            }
        }
        return $categoryMenu;
    }

    function buildCurriculum($curriculum, $categories) {
        $curriculumDisplay = "";
        foreach($categories as $category) {
            $curriculumDisplay .= "<div class='$category[stripecolor]-curriculum'>";
            $curriculumDisplay .= "<h3>$category[categorykName]</h3>";
            $curriculumDisplay .= "<h4>$category[categorydesc]</h4>";
            foreach ($curriculum as $technique) {
                $videos = getVideo($technique);
                $images = getImages($technique);
                if ($technique['categoryid'] == $category['categoryid']) {
                    $curriculumDisplay .= "<div class='tech'>";  
                        $curriculumDisplay .= "<div class='media'>";
                            foreach($images as $image) {
                                $curriculumDisplay .= "<img src='$image[imgsrc]' alt='$image[imgalt]' title='$image[imgtitle]'>";
                            }
                        $curriculumDisplay .= "</div>";
                        $curriculumDisplay .= "<p class='tech-title'><span class='tech-kname'>$technique[techniquekname]</span> &mdash; <span class='tech-ename'>$technique[techniqueename]</span></p>";
                        $curriculumDisplay .= "<p class='tech-desc'>$technique[techniquedesc]</p>";
                        $curriculumDisplay .= "<div class='media'>";
                            foreach($videos as $video) {
                                $curriculumDisplay .= "<article>";
                                $curriculumDisplay .= "<video src='$video[vidsrc]' style='max-width: $video[vidwidth]px; max-height:$video[vidheight]px;' preload controls>";
                                $curriculumDisplay .= "<p>Sorry! Your browser doesn't support our video.</p></video>";
                                $curriculumDisplay .= "<p class='video-title'>$video[viddesc]</p>";
                                $curriculumDisplay .= "</article>";
                            }
                        $curriculumDisplay .= "</div>";
                    $curriculumDisplay .= "</div>";
                }
            }
            $curriculumDisplay .= "</div>";
        }
        return $curriculumDisplay;
    }