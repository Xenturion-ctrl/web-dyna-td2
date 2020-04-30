*
     * @get("_default","name"=>"Home")
     */
    public function index() {}
    public function index() {
        $menu=$this->getMenu('Home');
        $messages=$this->dataProvider->getMessages();
        $content=nl2br($this->dataProvider->getPageContent('Home'));
        $this->loadView('MainController/index.html',compact('messages','content') + $menu);
    }


	/**
	 *@route("contact","methods"=>["get"],"name"=>"Contact")
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm.html');
	}
	/**
	 *@route("partners","methods"=>["get"],"name"=>"Partners")
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');
	}
	/**
	 *@route("partner/{name}","methods"=>["get"])