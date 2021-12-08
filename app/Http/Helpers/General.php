<?php

use App\Models\AnlasmaliKurumlar;
use App\Models\iletisim;
use App\Models\Mail;
use App\Models\Randevular;
use App\Models\YonetimAyarlari;

/*gelen mail sayısı */
function getMailCount(){ $totalMail = Mail::all()->count(); return $totalMail; }

/*gelen yeni mailler */
function getNewMailCount(){ $yeniMail = Mail::where('durum','Okunmadı')->count();return $yeniMail;}

/*gelen yeni mail badget aktif-pasit */
function NewMailCount(){ if ((Mail::where('durum','Okunmadı')->count())==0) {return "visibility: hidden;";}else{ return "visibility: visible;";} }

/*gelen tüm bekleyen randevular */
function getMeetingCount(){ $totalRandevular = Randevular::all()->count(); return $totalRandevular; }

/*gelen tüm bekleyen randevular */
function getWaitMeetingCount(){ $bekleyenRandevular = Randevular::where('durum','Okunmadı')->count(); return $bekleyenRandevular; }

/*gelen yeni randevu badget aktif-pasit */
function WaitMeetingCount(){ if ((Randevular::where('durum','Okunmadı')->count())==0) {return "visibility: hidden;";}else{ return "visibility: visible;";} }

/*iletişim bilgileri listeleme */
function iletisim(){ $iletisim = iletisim::find(1);return $iletisim;}

/*yönetim bilgileri listeleme */
function yonetim(){ $yonetim = YonetimAyarlari::find(1); return $yonetim;}

/*anlaşmalı kurumlar bilgileri listeleme */
function anlasmaliKurumlar(){$anlasmaliKurumlar = AnlasmaliKurumlar::all(); return $anlasmaliKurumlar;}
