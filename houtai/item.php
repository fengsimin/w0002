<?php
//Copyright (c) 2016 iFeiwu.com
 class Item extends Ifeiwu { public function __construct() { goto jkfT6; hSQAb: parent::__construct(); goto kgWLn; jkfT6: if ($this->table) { goto tkZhU; } goto QSHYn; ZdyFO: tkZhU: goto hSQAb; QSHYn: $this->table = "\x69\x74\145\x6d"; goto ZdyFO; kgWLn: } protected function postPage($request_data) { goto UEaCl; AWQf9: goto pwHlV; goto y9eZB; yXh36: $data = array("\154\151\x73\x74" => $list, "\x74\x6f\164\x61\x6c" => $total, "\160\x65\x72\160\x61\147\145" => $perpage, "\x70\x61\x67\x65" => $page); goto hXzF0; lqWwp: $data = $this->db->select($this->table, $column)->where($where)->order($order)->all(); goto AWQf9; SBdA3: $page = $page ? $page - 1 : 0; goto G0hbS; y9eZB: dMy_f: goto QgB05; k5lAW: $order = $request_data["\x6f\x72\144\x65\162"] ?: $this->order; goto E_H81; qDPIY: return $this->success($data); goto jkNeY; G0hbS: $total = $this->db->select($this->table)->where($where)->count(); goto vd9Jj; QTHkU: $where = $request_data["\x77\x68\145\162\x65"] ?: "\61\40\x3d\40\x31"; goto k5lAW; R40K1: $this->_callback("\x63\x61\154\154\142\141\143\153\x50\141\x67\x65\101\146\x74\145\x72", array(&$data)); goto qDPIY; hXzF0: pwHlV: goto R40K1; Qpa2r: if ($perpage > 0) { goto dMy_f; } goto lqWwp; UEaCl: $this->_callback("\x63\141\x6c\x6c\x62\141\143\153\120\141\x67\145\102\145\146\x6f\x72\145", array(&$request_data)); goto uWoqS; QgB05: $page = $request_data["\x70\141\x67\x65"] ?: 1; goto SBdA3; uWoqS: $column = $request_data["\143\157\154\165\x6d\156"] ?: "\x2a"; goto QTHkU; vd9Jj: $list = $this->db->select($this->table, $column)->where($where)->order($order)->limit(array($page * $perpage, $perpage))->all(); goto yXh36; E_H81: $perpage = $request_data["\x70\x65\162\x70\141\x67\x65"] ?: 0; goto Qpa2r; jkNeY: } protected function postQuery($request_data) { goto w8QZp; KasG1: $sql = str_replace("\44\164\141\142\154\145", $this->prefix . $this->table, $sql); goto njBFh; w8QZp: $sql = $request_data["\163\x71\154"]; goto wVuVS; rPvZk: return $this->db->query($sql, $request_data["\166\x61\x6c\165\x65\163"])->all(); goto QMAfy; njBFh: gogIF: goto rPvZk; wVuVS: if (!(stripos($sql, "\x24\x74\141\x62\154\145") !== false)) { goto gogIF; } goto KasG1; QMAfy: } protected function getOne($id, $column = null) { goto sh5X0; Ssguc: return $this->success($data); goto v1fa1; b0z_7: $data = $this->db->select($this->table, $column)->where(array("\x69\x64", "\75", $id))->get(); goto Ssguc; sh5X0: $column = $column ?: "\x2a"; goto b0z_7; v1fa1: } protected function postAdd($request_data) { goto XBpTE; NXof4: goto s5aSM; goto HIHTQ; XBpTE: $this->_callback("\143\141\154\154\142\141\143\x6b\101\144\x64\x42\145\146\x6f\162\145", array(&$request_data)); goto FtZt4; CRjeo: $this->_log("\141\144\x64", array("\164\151\x74\x6c\x65" => $data["\x74\x69\x74\154\x65"], "\164\141\142\154\145\137\x69\x64" => $id)); goto j2sbq; yC4BS: e6b1b: goto RwHz7; M3UkO: $this->db->rollBack(); goto EHMvK; FTU0Z: s5aSM: goto Pqt2F; EHMvK: return $this->error("\346\xb7\273\xe5\212\240\xe6\225\260\346\x8d\256\345\xa4\xb1\350\264\xa5\357\274\201"); goto NXof4; rhlbg: $udata[$upload_name] = $upload_path; goto i1OPN; Fbi_w: if ($this->db->update($this->table, $udata, array("\x69\x64", "\75", $id))->is()) { goto a67qi; } goto M3UkO; DrLEH: $data["\151\x64"] = $id; goto kMfte; xMCYF: $pid = $data["\160\x69\144"]; goto yjtjI; CVh28: if ($id) { goto qh9XJ; } goto ccrKR; q_q7F: $this->_callback("\143\141\x6c\x6c\142\x61\x63\153\x41\x64\144\101\x66\164\x65\162", array($id, &$request_data)); goto CRjeo; ccrKR: return $this->error("\xe6\xb7\xbb\xe5\x8a\240\346\x95\260\346\x8d\256\345\xa4\xb1\xe8\264\245\xef\274\x81"); goto Kb8f9; cflel: $this->db->beginTransaction(); goto BdAsK; g81AZ: $udata = array("\x69\x64" => $id); goto xMCYF; i1OPN: Kh7mp: goto Fbi_w; HJZED: return $this->success("\346\267\xbb\345\x8a\xa0\xe6\x95\xb0\xe6\215\256\346\x88\220\345\212\237\357\274\201", array("\151\x64" => $id, "\151\155\x61\x67\x65\x5f\160\x61\x74\150" => $upload_path)); goto FTU0Z; HIHTQ: a67qi: goto q_q7F; kMfte: $upload_path = $this->_bulidUploadPath($upload_path, $data); goto rhlbg; sSG2s: if (!($upload_name && $upload_path)) { goto Kh7mp; } goto DrLEH; j2sbq: $this->db->commit(); goto HJZED; RwHz7: $upload_name = $request_data["\44\x75\x70\154\x6f\141\144\x5f\156\x61\155\145"]; goto cs9Nz; TXW8G: $data["\143\x74\x69\x6d\145"] = time(); goto cflel; cs9Nz: $upload_path = $request_data["\44\165\160\x6c\x6f\141\x64\x5f\x70\x61\164\150"]; goto sSG2s; m108u: $udata["\x6c\x65\x76\x65\154"] = $this->_getLevel($pid, $id); goto yC4BS; FtZt4: $this->_removeFiles2($request_data["\x5f\x72\x65\x6d\x6f\x76\145\146\151\154\x65\163"]); goto vUZSr; vUZSr: $data = $this->_bulidData($request_data); goto TXW8G; Kb8f9: qh9XJ: goto g81AZ; yjtjI: if (!($pid > 0 && in_array("\x6c\145\x76\x65\154", $this->fields))) { goto e6b1b; } goto m108u; BdAsK: $id = $this->db->insert($this->table, $data)->id(); goto CVh28; Pqt2F: } protected function postUpdate($id, $request_data) { goto AV8T3; SMb3r: $data = $this->_bulidData($request_data); goto CZlym; uedq4: $pid = $data["\160\151\x64"]; goto nt3G6; R858e: $this->_log("\165\160\144\x61\164\145", array("\164\x69\164\154\145" => $data["\x74\x69\x74\x6c\x65"])); goto dgCSt; z_0LW: return $this->error("\344\277\235\xe5\xad\230\345\xa4\xb1\xe8\xb4\245\xef\274\201"); goto FtA3L; R1b1_: $upload_path = $this->_bulidUploadPath($upload_path, $data); goto FftQs; vdmmj: RwTkB: goto OacAy; ZCZjW: if ($this->db->update($this->table, $data, array("\x69\x64", "\75", $id))->is()) { goto RwTkB; } goto z_0LW; xV3sK: if (!($upload_name && $upload_path)) { goto GF_B2; } goto R1b1_; ZUJwj: $upload_name = $request_data["\44\x75\160\154\157\x61\x64\x5f\x6e\x61\155\x65"]; goto vngtK; AV8T3: $this->_callback("\143\x61\154\154\x62\141\x63\153\125\160\x64\141\164\145\102\x65\146\x6f\x72\145", array(&$request_data)); goto FfwGT; aV9pP: KtJZ0: goto EpfuC; TGojD: $data["\154\x65\166\x65\154"] = $this->_getLevel($pid, $id); goto LW5bR; dgCSt: return $this->success("\345\xb7\xb2\xe4\xbf\235\345\xad\x98\346\x9b\264\346\224\xb9\357\274\x81"); goto aV9pP; nt3G6: if (!($pid > 0 && in_array("\x6c\x65\x76\x65\154", $this->fields))) { goto ggzRk; } goto TGojD; FD287: $data[$upload_name] = $upload_path; goto fqjrr; OacAy: $this->_callback("\143\x61\x6c\154\x62\x61\143\153\125\x70\144\x61\x74\145\101\x66\164\x65\162", array($id, &$request_data)); goto R858e; fqjrr: WMKFl: goto wI0B9; vngtK: $upload_path = $request_data["\44\x75\160\x6c\x6f\141\144\137\160\141\x74\150"]; goto xV3sK; LW5bR: ggzRk: goto ZUJwj; wI0B9: GF_B2: goto ZCZjW; FfwGT: $this->_removeFiles2($request_data["\137\162\x65\x6d\x6f\x76\x65\146\x69\154\x65\x73"]); goto SMb3r; FftQs: if (!in_array($upload_name, $this->fields)) { goto WMKFl; } goto FD287; CZlym: $data["\x75\164\151\x6d\x65"] = time(); goto uedq4; FtA3L: goto KtJZ0; goto vdmmj; EpfuC: } protected function postField($request_data) { goto OcHE1; RtMwd: if ($this->db->update($this->table, array($name => $value), array("\151\144", "\111\x4e", $ids))->is()) { goto YfU3h; } goto V6edu; V6edu: return $this->error(); goto RgHIX; RgHIX: goto Nr8wj; goto bNa1i; M9trM: $name = $request_data["\x6e\141\155\x65"]; goto PKQzC; OcHE1: $ids = $request_data["\x69\144"]; goto M9trM; PKQzC: $value = $request_data["\166\x61\154\165\145"]; goto RtMwd; Gh3QH: return $this->success(); goto oNffF; oNffF: Nr8wj: goto qotIh; bNa1i: YfU3h: goto Gh3QH; qotIh: } protected function postCount($request_data) { goto Byd7P; qnEcR: $where = $request_data["\x77\150\x65\162\x65"] ?: "\61\x20\75\40\61"; goto Jrmf6; Byd7P: $table = $request_data["\164\141\x62\x6c\x65"] ?: $this->table; goto qnEcR; Jrmf6: return $this->db->select($table)->where($where)->count(); goto yLfjf; yLfjf: } protected function postDelete($request_data) { goto AIK8S; xefb0: $this->_callback("\143\x61\154\x6c\142\x61\143\x6b\104\x65\154\x65\164\145\101\x66\164\145\162", array(&$request_data)); goto IS8vf; lT8j3: return $this->success(); goto mdKmG; CIq3a: bCzPo: goto SH8Sq; QmE5y: $this->db->beginTransaction(); goto MCBC3; SH8Sq: if (count($error) === 0) { goto f2FYB; } goto zjrRC; mdKmG: azkVO: goto XbmuM; IS8vf: $this->db->commit(); goto IDuNK; AIK8S: $this->_callback("\143\141\154\154\x62\141\143\x6b\104\145\154\145\x74\x65\102\x65\x66\157\162\145", array(&$request_data)); goto jI4dN; MCBC3: foreach ($ids as $id) { goto rOfKQ; rfeuE: goto IncBE; goto f13fU; vWX_Q: $this->_trash($item, $request_data); goto qA5yh; rH39o: eX63a: goto vWX_Q; nqQzD: $error[] = $id; goto rfeuE; wx1cs: if ($this->db->delete($this->table, array("\x69\x64", "\75", $id))->is()) { goto eX63a; } goto nqQzD; i4ro_: IncBE: goto zcvUC; qA5yh: qwjKN: goto i4ro_; rOfKQ: $item = $this->db->select($this->table)->where(array("\x69\144", "\x3d", $id))->get(); goto wx1cs; f13fU: goto qwjKN; goto rH39o; zcvUC: } goto CIq3a; IDuNK: $this->_log("\162\145\x6d\157\x76\145", array("\164\151\x74\154\145" => count($ids))); goto lT8j3; m3ssO: f2FYB: goto xefb0; rrG22: return $this->error("\346\x9c\x89\x20" . count($error) . "\346\235\xa1\xe6\225\xb0\xe6\x8d\xae\345\210\xa0\xe9\x99\244\xe5\244\xb1\350\xb4\xa5\357\274\x81"); goto KOYdS; zjrRC: $this->db->rollBack(); goto rrG22; jI4dN: $error = array(); goto rVD0D; rVD0D: $ids = $request_data["\x69\x64"]; goto QmE5y; KOYdS: goto azkVO; goto m3ssO; XbmuM: } }