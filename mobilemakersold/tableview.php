<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<div id="wrapper">
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>How to Create Table Views in Swift</h1>

                    <h3>Goal</h3>
                    <p>We are going to create an app that has a table view with a list of pet names! You will learn
                    how to create table views and populate them with data. You'll also learn the basics of arrays in Swift.</p>

                    <!--<h3>Table of Contents</h3>-->
                    <!--<h4>Create the Project</h4>-->
                    <!--<h4>Create the Table View Controller</h4>-->
                    <!--<h4>Populate the Table View Cells with Data</h4>-->
                    <!--<h4>Create App Icons and a Launch Screen</h4>-->


                    <div id="#start">
                        <h3>Create the Project</h3>
                        <ul>
                            <li>Open Xcode</li>
                            <li>Create a new Xcode project</li>
                            <li>Under iOS, click Application</li>
                            <li>Choose Single View Application</li>
                            <li>A single view application creates a starting point (or template) for an app that has a single view. You can add more views to the single view if you want to.</li>
                            <li>NEXT</li>
                            <li>Fill out the data for the project</li>
                        <br><br><br>
                        <img src="img/tableview/intro.png" alt=""/>
                        <br><br><br>
                        <img src="img/tableview/setup.png" alt=""/>
                        <br><br><br>
                            <li>Product Name is the name of your project</li>
                            <li>Organization Name is used if you put your app in the app store, so I just put my name or initials</li>
                            <li>Organization Identifier is also used for the app store, so I just put my name here as well</li>
                            <li>Bundle Identifier is something Xcode create automatically</li>
                            <li>Language should be Swift</li>
                            <li>Devices should be iPhone. We will be dealing with the Universal selection later</li>
                            <li>Make sure all checkboxes are unchecked</li>
                            <li>NEXT</li>

                            <li>Choose a place where you want your project located. I usually put it on my Desktop</li>
                            <li>Keep Source Control: Create Git repository unchecked, we don’t need version control through xcode</li>
                            <ul>
                                <li>Version control is used to help keep your code organized and in different versions so you can revert back to a time before</li>
                            </ul>
                        </ul>
                    </div>
                    <br><br><br>



                    <div id="tableview">
                        <h3>Create the table view controller in the Storyboard</h3>
                        <ul>
                            <li>Find the Project Navigator and go into Main.storyboard. This is the main layout file</li>
                            <br><br>
                            <img src="img/tableview/view.png" />
                            <br><br>
                            <li>If you want more room to work, you can hide sections of Xcode by clicking on these square icons</li>
                            <br><br>
                            <img src="img/tableview/icon.png" />
                            <br><br>
                            <li>The initial scene is a view controller but we want a table view controller</li>
                            <li>Click on the view controller in the storyboard and delete it</li>
                            <li>Go over to the Object Library and drag onto the storyboard a table view controller</li>
                            <br><br>
                            <img src="img/tableview/object.png" />
                            <br><br>
                            <li>In the attributes inspector make sure “Is Initial View Controller” is checked</li>
                            <br><br>
                            <img src="img/tableview/initial.png" />
                            <br><br>
                            <li>We need to make sure the ViewController.swift file is associated with our new view controller, so go into ViewController.swift and change its super class from UIViewController to UITableViewController</li>
                            <br><br>
                            <img src="img/tableview/import.png" />
                            <br><br>
                            <!--<pre><p>import UIKit</p>-->
                                <!--<p>class ViewController: UITableViewController {</p></pre>-->
                            <li>Go back into Main.Storyboard, select the table view controller and change its class to ViewController</li>
                            <br><br>
                            <img src="img/tableview/class.png" />
                            <br><br>
                            <li>Select the Table View Cell and in the attributes inspector make the identifier <b>CellIdentifier</b></li>
                            <br><br>
                            <img src="img/tableview/cell.png" />
                            <br><br>
                            <li>If you run the app, you will see an empty table view!</li>
                        </ul>
                    </div>



                    <br><br><br>
                    <div id="data">
                        <h3>Populate the Table View Cells With Data</h3>
                        <ul>
                            <li>Go into ViewController.swift and add an array that will hold the pet names</li>
                            <li>Then add strings (pet names) to the array</li>
                            <li><b>var myArray = ["Patches", "Mocha", "Mittens", "Charlie", "Shadow", "Fifi", "Buddy", "Lucky"]</b></li>

                            <br><br>
                            <img src="img/tableview/array.png" />
                            <br><br>
                            <!--<pre><p>import UIKit</p>-->
                                <!--<p>class ViewController: UITableViewController {</p>-->
                            <!--<p>    var myArray = ["Patches", "Mocha", "Mittens", "Charlie", "Shadow", "Fifi", "Buddy", "Lucky"]</p></pre>-->
                            <li>We need to add required functions for the table view to work properly</li>
                            <li>Copy the following two functions into ViewController.swift</li>
                            <br>
                            <li>
                                <b>// Customize number of rows in the table view<br>
                                override func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {<br>
                                // counts the number of items in the array<br>
                                return myArray.count<br>
                                }<br><br>

                                // Displays the table view cells<br>
                                override func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {<br>
                                //configure the cell<br>
                                let cell = tableView.dequeueReusableCellWithIdentifier("CellIdentifier", forIndexPath: indexPath)<br>
                                // Puts text into cell<br>
                                cell.textLabel?.text = myArray[indexPath.row]<br>
                                return cell<br>
                                }</b><br>
                                <br>
                            </li>
                            <li>The first function tells the view controller how many rows are going to be in the table view. myArray.count counts the number of items in the array we created</li>
                            <li>The second function displays the cells, so you do any formatting here</li>
                                <ul>
                                    <li>You will see the CellIdentifier is being used to access our cell in the view controller</li>
                                    <li>cell.textLabel?.text creates text for each of the cells</li>
                                        <li>myArray[indexPath.row] gives each cell one pet name</li>
                                </ul>
                            <br><br>
                            <img src="img/tableview/code.png" />
                            <br><br>
                            <li>If you run the app, you will be able to see the pet names!</li>
                        </ul>
                    </div>

                    <br><br><br>
                    <div id="extra">
                        <h3>Create App Icons and a Launch Screen</h3>
                        <li>Let’s change the launch screen. The launch screen is the first thing you see when you open an app, but it only lasts a few seconds</li>
                        <li>Navigate to the LaunchScreen.storyboard and drag a label from the Object Library to the view controller</li>
                        <li>Change the label to say Pet Names</li>
                        <br><br>
                        <img src="img/tableview/label.png" />
                        <br><br>
                        <li>You can change the background color and font color in the attributes inspector if you want to spiff up your launch screen!</li>
                        <br><br>
                        <img src="img/tableview/spif.png" />
                        <br><br>
                        <li>Navigate to Assets.xcassets and click on AppIcon</li>
                        <br><br>
                        <img src="img/tableview/app.png" />
                        <br><br>
                        <li>This shows all of the different sized app icons you will need for the iPhone</li>
                        <li>The dimensions are in points, not pixels, so you need to double or triple the number it gives you when creating app icons. For example, 29pt needs to be 58 pixels by 58 pixels for 2x and 87 pixels by 87 pixels for 3x</li>
                        <li>You can download the app icons I created <a href="/img/tableview/appicons/appicons.zip" target="_blank" download>HERE</a>. Make sure you drag and drop them into the correct spot</li>
                        <li>Run the app, you’re done!</li>
                    </div>


                    <!--<pre><p>I am a code block</p></pre>-->
                    <!--<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<?php include 'includes/footer.php'; ?>
