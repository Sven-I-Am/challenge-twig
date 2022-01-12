<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class RandomQuote extends AbstractExtension
{

    private array $quotes =
    [
        "“Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.” \n― Albert Einstein",
        "“Darkness cannot drive out darkness, \nonly light can do that. \nHate cannot drive out hate, \nonly love can do that.” \n― Martin Luther King Jr., A Testament of Hope: The Essential Writings and Speeches ",
        "“Be the change that you wish to see in the world.” \n― Mahatma Gandhi",
        "“If you want to know what a man's like, take a good look at how he treats his inferiors, not his equals.” \n― J.K. Rowling, Harry Potter and the Goblet of Fire",
        "“Use lots of quotation signs, they make you look wiser.” \n- Koen Eelen",
    ];

    public function getRandomQuote(): string
    {
        return $this->quotes[array_rand($this->quotes)];
    }

    public function getFunctions(){
        return [new TwigFunction('quote', [$this, 'getRandomQuote']),];
    }

}