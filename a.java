public static void main(String[] args) {
    Birth birth = new Birth();
}

public class Birth {

    private State state;    // interface

    public Birth() {
        state = new HappyState(this);
    }

    /**
    * Makes time pass for the mammoth
    */
    public void timePasses() {
        if (state.getClass().equals(HappyState.class)) {
            changeStateTo(new AngryState(this));
        } else {
            changeStateTo(new HappyState(this));
        }
    }

    private void changeStateTo(State newState) {
        this.state = newState;
        this.state.onEnterState();
    }

    @Override
    public String toString() {
        return "The Birth";
    }

    public void felling() {
        this.state.observe();
    }
}

public interface State {
    void onEnterState();
    void observe();
}

public class HappyState implements State {

    private Birth birth;

    public HappyState(Birth birth) {
        this.birth = birth;
    }

    @Override
    public void observe() {
        System.out.println(String.format("%s is calm and peaceful.", birth));
    }

    @Override
    public void onEnterState() {
        System.out.println(String.format("%s calms down.", birth));
    }

}

public class AngryState implements State {

    private Birth birth;

    public AngryState(Birth birth) {
        this.birth = birth;
    }

    @Override
    public void observe() {
        System.out.println(String.format("%s is furious!", birth));
    }

    @Override
    public void onEnterState() {
        System.out.println(String.format("%s gets angry!", birth));
    }

}