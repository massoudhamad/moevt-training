
public class GradeBook
{
    private String courseName;
    public GradeBook()
    {

    }

    public GradeBook(String courseName)
    {
        setCourseName(courseName);
    }

    public void setCourseName(String course)
    {
        courseName=course;
    }
    public String getCourseName()
    {
        return courseName;
    }
    public void displayMessage()
    {
        System.out.println("Welcome to our Course");
        System.out.println(getCourseName());
    }
}