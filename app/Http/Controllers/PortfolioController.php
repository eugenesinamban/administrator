<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public $about = [];
    public $portfolio = [];

    public function __construct()
    {
        $this->about = [

            [
                'en' => 'My name is Eugene Sinamban, and I am currently a 2nd year student at Tech C. taking up
                Programming.',
                'ja' => '初めまして、東京デザインテクノロジーセンター専門学校で在学中、二年生プログラマー専攻のシナンバン・ユージンです。'
            ],
            [
                'en' => "What you'll see on this website is a collection of my works so far, and links to live websites.",
                'ja' => 'ここにあるのは今まで制作したウェブサイトと、それのリンクです。'
            ],
            [
                'en' => 'Am able to use Laravel, a little bit of Rails and Vue.',
                'ja' => 'Laravelはできます。RailsとVueは勉強中。'
            ]

        ];

        $this->portfolio = [
            'exchange' => [
                'title' => "Yogi's Exchange",
                'slug' => 'exchange',
                'details' => [
                    'en' => 'Website to check foreign exchange rates',
                    'ja' => '為替レートを見ることができるウェブサイト。'
                ],
                'link' => 'http://yogiexchange.rf.gd/',
                'image' => '/assets/images/Exchange.png'
            ],
            'organizer' => [
                'title' => 'Organizer',
                'slug' => 'organizer',
                'details' => [
                    'en' => 'Organizer created for foreigners living in Japan, especially students like me,
                                who need to organizer their Part-time job hours and keep track of salary which is
                                checked by the Immigration Office of Japan',
                    'ja' => '外国人向けのバイトのシフトを管理するためのウェブサイト。留学生や、他の就労時間が制限されてる方々の為に、バイト先の住所、連絡の登録ができる。バイト時間、給料などの計算も可能。'
                ],
                'link' => 'http://organizer.epizy.com',
                'image' => '/assets/images/Organizer.png'
            ],
            'tflow' => [
                'title' => 'Tech C Overflow',
                'slug' => 'tflow',
                'details' => [
                    'en' => 'Stack Overflow-like website which is made for Tech C students so that they may ask questions in a safe environment, 
                    where fellow students can answer and build camaraderie by working on problems together.',
                    'ja' => 'Stack Overflowの模写ウェブサイト。学生同士が同じ問題に悩まされているため、質問をするなら友達や、先輩方に聞いた方がいいと思い、
                    このウェブサイトを作りました。学生の仲もよくなるし、同じ問題に取り組めばより深い友情の始まりを望んでます。'
                ],
                'link' => 'https://tech-c-overflow.herokuapp.com',
                'image' => '/assets/images/tflow.png'
            ],
            'calculator' => [
                'title' => 'Calculator',
                'slug' => 'calculator',
                'details' => [
                    'en' => 'A calculator made purely with React library. I made this application as a stepping stone to creating the mobile
                    application for Tech C Overflow, my other website, which I plan to create with React Native.',
                    'ja' => 'React.jsで作られた電卓。Tech C Overflowの連携アプリを作るために練習のアプリを作りました'
                ],
                'link' => 'https://radiant-harbor-05944.herokuapp.com/',
                'image' => '/assets/images/react-calculator.png'
            ],
            'corona' => [
                'title' => 'Corona Data Search',
                'slug' => 'corona',
                'details' => [
                    'en' => 'A test website using React, designed to provide updated data regarding Covid-19 cases provided by an api.',
                    'ja' => 'React.jsで作られたコロナの感染者数などの情報を提供するウェブサイトです。ReactでのAPIのデータ取得方法の練習するために作りました'
                ],
                'link' => 'https://boiling-sierra-92918.herokuapp.com/',
                'image' => '/assets/images/corona-number-search.png'
            ]
        ];
    }
    public function index() {

        $portfolio = $this->portfolio;
        $about = $this->about;
        $lang = currentSlug();
        return view('portfolio.index', compact('portfolio', 'about', 'lang'));
    }

    public function show($slug, $lang = null) {
        $about = $this->about;
        $keys = array_keys($this->portfolio);
        if (!in_array($slug, $keys)) {
            return redirect()->route('index');
        }
        $portfolio = $this->portfolio[$slug];
        return view('portfolio.show', compact('slug', 'about', 'portfolio', 'lang'));
    }
}
