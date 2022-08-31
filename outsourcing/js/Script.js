
class Product{
    constructor(id,name,description,points,image){
        this.id =id;
        this.name =name;
        this.description =description;
        this.points =points;
        this.image =image;
    }
}

p1 = new Product('cms','Contract Managment System',
    'A1CMS spans the entire lifecycle of a contract, from birth to death to rebirth (renewal), and is said to simplify all the stages in between.  It categorizes its service into nine key stages:  Contract Request, Authoring, Negotiation, Approval, Execution, Obligations Management, Amendment, Audit & Reporting, and Renewal.  It can be configured to any platform you’re already using, with full mobile accessibility on iPhone, iPad, and Android devices.',
    ['decrease approval times',
    'increase contract visibility',
    'improve audit preparation',
    'never miss a renewal date',
    'ensure contract compliance',
    'improve document management',
    'improve commitment to completion'],
    '/Assets/images/productModel/contract.jpeg')

p2 = new Product('pm','Project Managment Solution',
    'A1PM is a feature rich project management platform that lends itself to multiple applications, most notably the project management ecosystem. Features such as tasks, task lists, time tracking, file uploads, Cost Tracking, messages and monitoring for any changes in the project adding to that the very strong work flow embedded in the application make it the perfect tool to streamline day to day jobs. Teamwork Projects helps teams work better together, closes communications gaps and aligns business processes leading to a drastic increase in team performance',
    ['gain visibility',
    'simplify planning',
    'enable collaboration',
    'streamline workflow'],'/Assets/images/productModel/management.jpg')

p3 = new Product('dms','Document Relationship Management',
    'Documents are the most valuable asset in any organization; so protecting and managing it is crucial. This is a product that helps you manage your document through out its whole life cycle',['meta data',
    'document archiving',
    'document retrieval',
    'version control',
    'workflow',
    'optical character recognition',
    'search'],'/Assets/images/productModel/Document.jpg');

p4 = new Product('wf', 'Workflow Managment Solution',
    'A very dynamic platform that enables u to organize and structure your organization with conditions, options and constraints without writing one line of code.',
    ['workflow as a service',
    'built without coding',
    'easy to build',
    'bild complicaed approval cycles',
    'set alerts and notifications whenever needed',
    'process automition in hours or day not weeks or months'],
    '/Assets/images/productModel/workflow1.jpg');

p5 = new Product('clm','Close Loop Marketing',
    'Closed-loop marketing tracks marketing channels from the time a visitor lands on your site to the time your sales team closes a new customer. By integrating your marketing software with your CRM system (more on the technology you’ll need for closed-loop marketing later), you can see which marketing channels are working and which aren’t, and can strategize for better results and hotter leads for your sales team in the future.',
    ['attract','convert','close'],
    '/Assets/images/productModel/marketing.jpeg');

p6 = new Product ('emt','Event Management Tool Solution',
    'A complete platform that handles the entire event lifecycle from start to finish in addition to the contracts made with the special Physician who has special Roles in the Events “Speaker, Trainer, Chairman…”, The contracts also made with the Event holders for sponsoring the events and documenting the sponsorship benefits “Exhibition stand, Satellite Symposium, Advertising on documentation of the event…” adding to that all the detailed part for the clinical trial',
    ['event modules','expert modules','HCO module','clinical trail module'],
    '/Assets/images/productModel/event.png');

p7 = new Product('lms','Leadership Managment System','A Complete and unique skill enhancement and measurement platform for UAE citizens',['build courses',
    'create project', 'exams & quizes',
    'make assessments',
    'alerts and notifications',
    'chatting with the trainer',
    'integration with active directory'],
    '/Assets/images/productModel/leadership.jpg')

p8 = new Product('hr', 'Human Resources Solution',
    'A1HRS With the rapid growth of your business, maintaining data and executing time-consuming transactional activities become a pain and a challenge. A1HRS helps both business leaders and the HR to do more with less and focus on what matters most, thus helping both parties drive more informed decision making, by reducing the time they spend on transactional work. With silo data transferred into clear information throughout the system. A1HRS allows you to monitor the full gamut of HR functions from hire to retire. A1HRS brings in smart working culture with the power of automation of the entire HR processes and helps you build a world class workforce.',
    ['efficiency','convenience','data accuracy','productivity'],
    '/Assets/images/productModel/hr.jpg')

var productsList = [p1,p2,p3,p4,p5,p6,p7,p8];

class Service{
    constructor(id,name,description,image){
        this.id = id;
        this.name = name;
        this.description = description;
        this.image = image; 
    }
}
s1 = new Service('web','Web Application development',[
    'A1softech is an experienced software development firm providing offshore and onsite software development services.',
    'Our cost-effective solutions are built specifically for organizations by utilizing an intimate understanding of their business and industry landscape. We offer rich user friendly and robust applications in combination with any modern database system.',
    'The application can be totally standalone running in a single machine, network solutions or internet connected application.'],
    '/Assets/images/servicesModel/web.svg');

s2 = new Service('test','Software Testing',
    ['A1softech owe it to ourselves and to our clients to deliver the best application it can by providing Software Quality Assurance. We offer different types of software testing services from test case design to test report generation. A1softech is experienced in Functional and nonfunctional testing. We maintain best practices in test planning, test case design, test environment creation, test case execution, bug reporting process, and finally test report generation.'],
    '/Assets/images/servicesModel/test.svg');

s3 = new Service('ai','AI Applications',
    ['Enhance your future application with artificial intelligence features, such as image-processing, speech recognition, intelligent search, lead scoring, sentiment analysis, intent analysis, brand representation monitoring, and more with rich possibilities of Azure Machine Learning and Cognitive Services.'],
    '/Assets/images/servicesModel/ai.svg');

s4 = new Service('iot','IOT Applications',
    ['Leverage processing of streaming data and immediate response delivery with rich .NET real-time functionality, such as Azure IoT Hub/Edge and SignaIR asynchronous server-client communication.'],
    '/Assets/images/servicesModel/iot.svg');

s5 = new Service('app','Mobile Application development',
    ['A1softech is an experienced software development firm providing offshore and onsite software development services.',
    'Our cost-effective solutions are built specifically for organizations by utilizing an intimate understanding of their business and industry landscape. We offer rich user friendly and robust applications in combination with any modern database system.',
    'The application can be totally standalone running in a single machine, network solutions or internet connected application.'],
    '/Assets/images/servicesModel/mobile.svg');

s6 = new Service('out','Outsourcing Services',
    ['Our approach is a unique mix of highly experienced development team, client-oriented service and passion for IT. Whether you are non-tech or well-established software company we can help you create software product tailored to your needs within budget and time. we are able to support you at any phase of your software development project, from the concept through implementation to the up-and-running solution, and maintenance.',
    'It reduces the risk, time and capital invested in the recruitment and employment processes, allowing thus to start the work right away, without any time gap.',
    'Depending on project specification, we can match the profile of the IT specialist or team. We ensure that our employees possess the highest professional skills.'],
    '/Assets/images/servicesModel/out.svg')

s7 = new Service('tech','Technology Consultancy',['A1softech provides high-end and mission critical enterprise solutions meeting all your requirements to achieve your ultimate business goal. We offer consultancy services that span the entire IT lifecycle, from business process re-engineering to software system design, development and implementation. Our consultancy services are tailored to satisfy your business requirements with the help of our individual and combined experience in design, implementation, and management of IT and communication systems around the world.'],
    '/Assets/images/servicesModel/consultant.svg')

s8 = new Service('mark','Digital Marketing',
    ['Marketing has always been about connecting with your audience in the right place and at the right time. Today, that means you need to meet them where they are already spending time: on the internet.',
    'Digital marketing encompasses all marketing efforts that use an electronic device or the internet. Businesses leverage digital channels such as search engines, social media, email, and other websites to connect with current and prospective customers.'],
    '/Assets/images/servicesModel/marketing.svg')

    var servicesList = [s1,s2,s3,s4,s5,s6,s7,s8];

var imageContainer = document.querySelector('.imagesArray');
var containerWidth = document.querySelector('.imagesArray').clientWidth;
var vacancy = document.querySelector('#job-vacancy');
var products = document.querySelectorAll('.product');
var services = document.querySelectorAll('.service');
var navElements = document.querySelectorAll('.navigation a')

//client logos
var imageArray = [];
for (let i = 0; i < 12; i++) {
    imageArray.push('/Assets/images/cients/'+(i+1)+'.jpg')
}

//work vacancies job titles
var vacancies = ['FrontEnd Developer','Business Analysist']

 
//display client logos
var imgFlow = document.createElement('div');
imageContainer.appendChild(imgFlow);

imageArray.forEach((image,index) => {
    var img = document.createElement('img');
    img.setAttribute('src', imageArray[index]);

    img.width = (containerWidth/5);
    img.class = image.width;

    imgFlow.appendChild(img);
});

//job vacancies display
vacancies.forEach((job)=>{
    var jobtitle = document.createElement('div');
    jobtitle.innerHTML = job;

    vacancy.appendChild(jobtitle);
})

var modal = document.querySelector('#modal');
var modalBox = document.querySelector('#modalBox');


const closeModal = ()=>{
    (modal.style.display == 'block'? modal.style.display ='none': modal.style.display ='block');
}

modal.addEventListener('click', closeModal);

//Prodoct Models display
const displayModel = (element) => 
{
    var product = productsList.find(item=>item.id === element.id)
    
        var ULelements = ``;
        product.points.forEach((point) => {
            ULelements+= `<li>${point}</li>`
        })

    var template = `<div>
        <div class="product-heading">
            <div class="close-modal">&times</div>
            <h2>${product.id}</h2>
            <h3>${product.name}</h3>
        </div>
        <div class="divisions">
            <div class="img_container">
                <img width="400px" src="${product.image}" /></div>
            <div class="info">
            <div>${product.description}</div>
            <ul>${ULelements}</ul>
        </div>
    </div>`;        

    modalBox.innerHTML = template;
    modal.style.display = "block";
}

//listening to products click
for(let i = 0; i < products.length; i++) {
    products[i].addEventListener("click", (e)=> {
        if(e.target.classList.contains("product"))
        {
            displayModel(e.target);
        }
        else 
        {
            displayModel(e.target.parentNode)
        }
    })
  }
//Models display
  const serviceModel = element => {
      
    const service = servicesList.find(service=>service.id == element.id)
    
    var sections = ``
    service.description.forEach(sec => 
        sections += `<div>${sec}</div>`
    )
    var template = ``
     template += `<div>
            <div class="product-heading">
                <div class="close-modal">&times</div>
                <h2>${service.name}</h2>
            </div>
            <div class="divisions">
                <div class="img_container">
                    <img width="300px" src="${service.image}" /></div>
                <div class="info">${sections}</div>
        </div>`;    

        modalBox.innerHTML = template;
        modal.style.display = "block";
  }

//listening to services click
services.forEach(service => {
    service.addEventListener('click', e=>{ 
        if(e.target.classList.contains('service')){
            serviceModel(e.target)
        }
        else{
            serviceModel(e.target.parentNode)
        }
    }
   )
    
});

const linkHighlight = (navElement) =>{
    navElements.forEach(element=> 
        element.classList.remove("active"))
    navElement.classList.add("active");
}

navElements.forEach(element =>
    element.addEventListener('click',e => linkHighlight(e.target)))



const scrollFunction = () => {
    var getY = window.pageYOffset;
    console.log(getY)
    if(getY === productsss.offsetHeight){
        console.log('excute func')
        e => linkHighlight(productsss)
    }
}


const productsss = document.querySelector("#products");
console.log(productsss.offsetHeight);


//Creating an intersection observer

// let callback = (entries, observer) => { 
//     entries.forEach(entry => {
//       console.log('observed:',entry.target)   
      
//     });
//   };
//     let options = {
//         root: document.querySelector("#products"),
//         rootMargin: '0px',
//         threshold: 1.0
//         }
    
//     let observer = new IntersectionObserver(callback, options);

//     let target = document.querySelector('#products');
//     observer.observe(target);

  