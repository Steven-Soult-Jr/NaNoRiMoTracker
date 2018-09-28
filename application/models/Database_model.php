<?php

class Database_model extends CI_Model {
	
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('array');
		date_default_timezone_set('America/Los_Angeles');
    }
    
    public function update($user, $wordcount){
        $data = array(
            'username' => $user,
            'wordcount' => $wordcount,
            'date' => date("md")
        );
        $this->db->where('username', element('username', $data));
        $this->db->where('date', element('date', $data));
        if($this->db->count_all_results() > 0) {
            $this->db->where('username', element('username', $data));
            $this->db->where('date', element('date', $data));
            $this->db->delete('words');
            $this->db->insert('words', $data);
        } else {
            $this->db->insert('words', $data);
        }
    }
    
    public function getData() {
        $data = array(
            'Steve1' => 0,
            'Steve2' => 0,
            'Steve3' => 0,
            'Steve4' => 0,
            'Steve5' => 0,
			'Steve6' => 0,
			'Steve7' => 0,
			'Steve8' => 0,
			'Steve9' => 0,
			'Steve10' => 0,
			'Steve11' => 0,
            'Steve12' => 0,
            'Steve13' => 0,
            'Steve14' => 0,
            'Steve15' => 0,
			'Steve16' => 0,
			'Steve17' => 0,
			'Steve18' => 0,
			'Steve19' => 0,
			'Steve20' => 0,
			'Steve21' => 0,
            'Steve22' => 0,
            'Steve23' => 0,
            'Steve24' => 0,
            'Steve25' => 0,
			'Steve26' => 0,
			'Steve27' => 0,
			'Steve28' => 0,
			'Steve29' => 0,
			'Steve30' => 0,
			'Steve31' => 0,
            'Steve32' => 0,
            'Steve33' => 0,
            'Steve34' => 0,
            'Steve35' => 0,
			'Steve36' => 0,
			'Steve37' => 0,
			'Steve38' => 0,
			'Steve39' => 0,
			'Steve40' => 0,
			'Steve41' => 0,
            'Steve42' => 0,
            'Steve43' => 0,
            'Steve44' => 0,
            'Steve45' => 0,
			'Steve46' => 0,
			'Steve47' => 0,
			'Steve48' => 0,
			'Steve49' => 0,
			'Steve50' => 0,
			'Steve51' => 0,
            'Steve52' => 0,
            'Steve53' => 0,
            'Susanne1' => 0,
            'Susanne2' => 0,
            'Susanne3' => 0,
            'Susanne4' => 0,
            'Susanne5' => 0,
			'Susanne6' => 0,
			'Susanne7' => 0,
			'Susanne8' => 0,
			'Susanne9' => 0,
			'Susanne10' => 0,
			'Susanne11' => 0,
            'Susanne12' => 0,
            'Susanne13' => 0,
            'Susanne14' => 0,
            'Susanne15' => 0,
			'Susanne16' => 0,
			'Susanne17' => 0,
			'Susanne18' => 0,
			'Susanne19' => 0,
			'Susanne20' => 0,
			'Susanne21' => 0,
            'Susanne22' => 0,
            'Susanne23' => 0,
            'Susanne24' => 0,
            'Susanne25' => 0,
			'Susanne26' => 0,
			'Susanne27' => 0,
			'Susanne28' => 0,
			'Susanne29' => 0,
			'Susanne30' => 0,
			'Susanne31' => 0,
            'Susanne32' => 0,
            'Susanne33' => 0,
            'Susanne34' => 0,
            'Susanne35' => 0,
			'Susanne36' => 0,
			'Susanne37' => 0,
			'Susanne38' => 0,
			'Susanne39' => 0,
			'Susanne40' => 0,
			'Susanne41' => 0,
            'Susanne42' => 0,
            'Susanne43' => 0,
            'Susanne44' => 0,
            'Susanne45' => 0,
			'Susanne46' => 0,
			'Susanne47' => 0,
			'Susanne48' => 0,
			'Susanne49' => 0,
			'Susanne50' => 0,
			'Susanne51' => 0,
            'Susanne52' => 0,
            'Susanne53' => 0,
            'Steven1' => 0,
            'Steven2' => 0,
            'Steven3' => 0,
            'Steven4' => 0,
            'Steven5' => 0,
			'Steven6' => 0,
			'Steven7' => 0,
			'Steven8' => 0,
			'Steven9' => 0,
			'Steven10' => 0,
			'Steven11' => 0,
            'Steven12' => 0,
            'Steven13' => 0,
            'Steven14' => 0,
            'Steven15' => 0,
			'Steven16' => 0,
			'Steven17' => 0,
			'Steven18' => 0,
			'Steven19' => 0,
			'Steven20' => 0,
			'Steven21' => 0,
            'Steven22' => 0,
            'Steven23' => 0,
            'Steven24' => 0,
            'Steven25' => 0,
			'Steven26' => 0,
			'Steven27' => 0,
			'Steven28' => 0,
			'Steven29' => 0,
			'Steven30' => 0,
			'Steven31' => 0,
            'Steven32' => 0,
            'Steven33' => 0,
            'Steven34' => 0,
            'Steven35' => 0,
			'Steven36' => 0,
			'Steven37' => 0,
			'Steven38' => 0,
			'Steven39' => 0,
			'Steven40' => 0,
			'Steven41' => 0,
            'Steven42' => 0,
            'Steven43' => 0,
            'Steven44' => 0,
            'Steven45' => 0,
			'Steven46' => 0,
			'Steven47' => 0,
			'Steven48' => 0,
			'Steven49' => 0,
			'Steven50' => 0,
			'Steven51' => 0,
            'Steven52' => 0,
            'Steven53' => 0
        );
        $query = $this->db->query("SELECT * FROM words WHERE username IN ('Steve', 'Susanne', 'Steven')");
        foreach($query->result() as $row) {
            if(1101 <= $row->date && $row->date <= 1104) {
                $data[$row->username."1"] = $row->wordcount;
            } else if (1105 <= $row->date && $row->date <= 1111) {
                $data[$row->username."2"] = $row->wordcount;
            }else if (1112 <= $row->date && $row->date <= 1118) {
                $data[$row->username."3"] = $row->wordcount;
            }else if (1119 <= $row->date && $row->date <= 1125) {
                $data[$row->username."4"] = $row->wordcount;
            }else if (1126 <= $row->date && $row->date <= 1130) {
                $data[$row->username."5"] = $row->wordcount;
            } else if (1201 <= $row->date && $row->date <= 1209) {
                $data[$row->username."6"] = $row->wordcount;
			} else if (1210 <= $row->date && $row->date <= 1216) {
                $data[$row->username."7"] = $row->wordcount;
			} else if (1217 <= $row->date && $row->date <= 1223) {
                $data[$row->username."8"] = $row->wordcount;
			} else if (1224 <= $row->date && $row->date <= 1230) {
                $data[$row->username."9"] = $row->wordcount;
			} else if (1231 <= $row->date || (101 <= $row->date && $row->date <= 106)) {
                $data[$row->username."10"] = $row->wordcount;
			} else if (107 <= $row->date && $row->date <= 113) {
                $data[$row->username."11"] = $row->wordcount;
			} else if (114 <= $row->date && $row->date <= 120) {
                $data[$row->username."12"] = $row->wordcount;
			} else if (121 <= $row->date && $row->date <= 127) {
                $data[$row->username."13"] = $row->wordcount;
			} else if (128 <= $row->date && $row->date <= 203) {
                $data[$row->username."14"] = $row->wordcount;
			} else if (204 <= $row->date && $row->date <= 210) {
                $data[$row->username."15"] = $row->wordcount;
			} else if (211 <= $row->date && $row->date <= 217) {
                $data[$row->username."16"] = $row->wordcount;
			} else if (218 <= $row->date && $row->date <= 224) {
                $data[$row->username."17"] = $row->wordcount;
			} else if (225 <= $row->date && $row->date <= 303) {
                $data[$row->username."18"] = $row->wordcount;
			} else if (304 <= $row->date && $row->date <= 310) {
                $data[$row->username."19"] = $row->wordcount;
			} else if (311 <= $row->date && $row->date <= 317) {
                $data[$row->username."20"] = $row->wordcount;
			} else if (318 <= $row->date && $row->date <= 324) {
                $data[$row->username."21"] = $row->wordcount;
			} else if (325 <= $row->date && $row->date <= 331) {
                $data[$row->username."22"] = $row->wordcount;
			} else if (401 <= $row->date && $row->date <= 407) {
                $data[$row->username."23"] = $row->wordcount;
			} else if (408 <= $row->date && $row->date <= 414) {
                $data[$row->username."24"] = $row->wordcount;
			} else if (415 <= $row->date && $row->date <= 421) {
                $data[$row->username."25"] = $row->wordcount;
			} else if (422 <= $row->date && $row->date <= 428) {
                $data[$row->username."26"] = $row->wordcount;
			} else if (429 <= $row->date && $row->date <= 505) {
                $data[$row->username."27"] = $row->wordcount;
			} else if (506 <= $row->date && $row->date <= 512) {
                $data[$row->username."28"] = $row->wordcount;
			} else if (513 <= $row->date && $row->date <= 519) {
                $data[$row->username."29"] = $row->wordcount;
			} else if (520 <= $row->date && $row->date <= 526) {
                $data[$row->username."30"] = $row->wordcount;
			} else if (527 <= $row->date && $row->date <= 602) {
                $data[$row->username."31"] = $row->wordcount;
			} else if (603 <= $row->date && $row->date <= 609) {
                $data[$row->username."32"] = $row->wordcount;
			} else if (610 <= $row->date && $row->date <= 616) {
                $data[$row->username."33"] = $row->wordcount;
			} else if (617 <= $row->date && $row->date <= 623) {
                $data[$row->username."34"] = $row->wordcount;
			} else if (624 <= $row->date && $row->date <= 630) {
                $data[$row->username."35"] = $row->wordcount;
			} else if (701 <= $row->date && $row->date <= 707) {
                $data[$row->username."36"] = $row->wordcount;
			} else if (708 <= $row->date && $row->date <= 714) {
                $data[$row->username."37"] = $row->wordcount;
			} else if (715 <= $row->date && $row->date <= 721) {
                $data[$row->username."38"] = $row->wordcount;
			} else if (722 <= $row->date && $row->date <= 728) {
                $data[$row->username."39"] = $row->wordcount;
			} else if (729 <= $row->date && $row->date <= 804) {
                $data[$row->username."40"] = $row->wordcount;
			} else if (805 <= $row->date && $row->date <= 811) {
                $data[$row->username."41"] = $row->wordcount;
			} else if (812 <= $row->date && $row->date <= 818) {
                $data[$row->username."42"] = $row->wordcount;
			} else if (819 <= $row->date && $row->date <= 825) {
                $data[$row->username."43"] = $row->wordcount;
			} else if (826 <= $row->date && $row->date <= 901) {
                $data[$row->username."44"] = $row->wordcount;
			} else if (902 <= $row->date && $row->date <= 908) {
                $data[$row->username."45"] = $row->wordcount;
			} else if (909 <= $row->date && $row->date <= 915) {
                $data[$row->username."46"] = $row->wordcount;
			} else if (916 <= $row->date && $row->date <= 922) {
                $data[$row->username."47"] = $row->wordcount;
			} else if (923 <= $row->date && $row->date <= 929) {
                $data[$row->username."48"] = $row->wordcount;
			} else if (930 <= $row->date && $row->date <= 1006) {
                $data[$row->username."49"] = $row->wordcount;
			} else if (1007 <= $row->date && $row->date <= 1013) {
                $data[$row->username."50"] = $row->wordcount;
			} else if (1014 <= $row->date && $row->date <= 1020) {
                $data[$row->username."51"] = $row->wordcount;
			} else if (1021 <= $row->date && $row->date <= 1027) {
                $data[$row->username."52"] = $row->wordcount;
			} else if (1028 <= $row->date && $row->date <= 1031) {
                $data[$row->username."53"] = $row->wordcount;
			}
        }
		
        return $data;
    }
}
